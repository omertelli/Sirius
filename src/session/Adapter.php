<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/11
 * Time: 下午2:09
 */

namespace Sirius\Session;


abstract class Adapter
{
    const SESSION_ACTIVE = 2;

    const SESSION_NONE = 1;

    const SESSION_DISABLED = 0;

    protected $_uniqueId;

    protected $_started = false;

    protected $_options;

    /**
     * Phalcon\Session\Adapter constructor
     *
     * @param array options
     */
    public function __construct($options = null)
    {
        if (is_array($options)) {
            $this->_options = $options;
        }
    }

    /**
     * Starts the session (if headers are already sent the session will not be started)
     */
    public function start()
    {

        if (!$this->_started && $this->status() !== self::SESSION_ACTIVE) {
            session_start();
            $this->_started = true;
            return true;
        }
        return false;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        if (isset($options["uniqueId"])) {
            $this->_uniqueId = $options["uniqueId"];
        }

        $this->_options = $options;
    }

    /**
     * Get internal options
     */
    public function getOptions()
    {
        return $this->_options;
    }

    /**
     * Set session name
     */
    public function setName($name)
    {
        session_name($name);
    }

    /**
     * Get session name
     */
    public function getName()
    {
        return session_name();
    }

    /**
     * {@inheritdoc}
     */
    public function regenerateId($deleteOldSession = true)
    {
        session_regenerate_id($deleteOldSession);
        return $this;
    }

    /**
     * Gets a session variable from an application context
     *
     * @param $index
     * @param null $defaultValue
     * @param bool $remove
     * @return null
     */
    public function get($index, $defaultValue = null, $remove = false)
    {
        if ($this->_uniqueId) {
            $index = $this->_uniqueId . ":" . $index;
        }

        if (isset($_SESSION[$index])) {
            $value = $_SESSION[$index];
            if ($remove) unset($_SESSION[$index]);
        } else {
            $value = $defaultValue;
        }

        return $value;
    }

    /**
     * Sets a session variable in an application context
     *
     *<code>
     *    $session->set('auth', 'yes');
     *</code>
     */
    public function set($index, $value)
    {
        if ($this->_uniqueId) {
            $index = $this->_uniqueId . ":" . $index;
        }

        $_SESSION[$index] = $value;
    }

    /**
     * Check whether a session variable is set in an application context
     *
     *<code>
     *    var_dump($session->has('auth'));
     *</code>
     */
    public function has($index)
    {
        if ($this->_uniqueId) {
            $index = $this->_uniqueId . ":" . $index;
        }

        return isset($_SESSION[$index]);
    }

    /**
     * Removes a session variable from an application context
     *
     *<code>
     *    $session->remove('auth');
     *</code>
     */
    public function remove($index)
    {
        if ($this->_uniqueId) {
            $index = $this->_uniqueId . ":" . $index;
        }

        unset($_SESSION[$index]);
    }

    /**
     * Returns active session id
     *
     *<code>
     *    echo $session->getId();
     *</code>
     */
    public function getId()
    {
        return session_id();
    }

    /**
     * Set the current session id
     *
     *<code>
     *    $session->setId($id);
     *</code>
     */
    public function setId($id)
    {
        session_id($id);
    }

    /**
     * Check whether the session has been started
     *
     *<code>
     *    var_dump($session->isStarted());
     *</code>
     */
    public function isStarted()
    {
        return $this->_started;
    }

    /**
     * Destroys the active session
     *
     *<code>
     *    var_dump($session->destroy());
     *    var_dump($session->destroy(true));
     *</code>
     */
    public function destroy($removeData = false)
    {

        if ($this->_uniqueId) {
            foreach ($_SESSION as $key => $value) {
                if (stripos($key, $this->_uniqueId . ":") === 0) {
                    unset($_SESSION[$key]);
                }
            }
        } else {
            $_SESSION = [];
        }

        return session_destroy();
    }

    /**
     * Returns the status of the current session. For PHP 5.3 this function will always return SESSION_NONE
     *
     *<code>
     *    var_dump($session->status());
     *
     *  // PHP 5.4 and above will give meaningful messages, 5.3 gets SESSION_NONE always
     *  if ($session->status() !== $session::SESSION_ACTIVE) {
     *      $session->start();
     *  }
     *</code>
     */
    public function status()
    {

        if (version_compare(PHP_VERSION, "5.3") != 0) {
            $status = session_status();

            switch ($status) {
                case PHP_SESSION_DISABLED:
                    return self::SESSION_DISABLED;

                case PHP_SESSION_ACTIVE:
                    return self::SESSION_ACTIVE;
            }
        }

        return self::SESSION_NONE;
    }

    /**
     * Alias: Gets a session variable from an application context
     */
    public function __get($index)
    {
        return $this->get($index);
    }

    /**
     * Alias: Sets a session variable in an application context
     */
    public function __set($index, $value)
    {
        return $this->set($index, $value);
    }

    /**
     * Alias: Check whether a session variable is set in an application context
     */
    public function __isset($index)
    {
        return $this->has($index);
    }

    /**
     * Alias: Removes a session variable from an application context
     */
    public function __unset($index)
    {
        return $this->remove($index);
    }

    public function __destruct()
    {
        if ($this->_started) {
            @session_write_close();
            $this->_started = false;
        }
    }
}