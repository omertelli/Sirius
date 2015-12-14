<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/11
 * Time: 下午2:02
 */

namespace Sirius\Session\Adapter;


use Sirius\Session\Adapter;
use Sirius\Session\AdapterInterface;

class Cookie extends Adapter implements AdapterInterface{
    protected $_storage = null;
    protected $_lifetime = 8600;
    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        //过期时间
        if (isset($options["lifetime"])) {
            $this->_lifetime = $options["lifetime"];
        }

        $default = [
            "hash_secret" => null,
            "hash_len" => 128,
            "hash_algo" => "sha512",
            "path" => "/",
            "httpOnly" => true,
        ];

        $options = array_merge($default, $options);

        $this->_storage = new CookieStorage($options);

        session_set_save_handler(
            [$this, "open"],
            [$this, "close"],
            [$this, "read"],
            [$this, "write"],
            [$this, "destroy"],
            [$this, "gc"]
        );

        parent::__construct($options);
    }

    public function open()
    {
        return true;
    }

    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @param string sessionId
     * @return mixed
     */
    public function read($sessionId)
    {
        return $this->_storage->get($sessionId);
    }

    /**
     * {@inheritdoc}
     *
     * @param string sessionId
     * @param string data
     */
    public function write($sessionId, $data)
    {
        $this->_storage->make($sessionId, $data, $this->_lifetime);
    }

    /**
     * {@inheritdoc}
     *
     * @param  string  sessionId
     * @return boolean
     */
    public function destroy($sessionId = null)
    {
        if ($sessionId === null) {
            $sessionId = $this->getId();
        }
        return $this->_storage->forget($sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function gc()
    {
        return true;
    }
}


class CookieStorage
{
    private $hash_len = 128;
    private $hash_algo = "sha512";
    private $hash_secret;

    private $domain = null;

    private $path = "/";

    private $httpOnly = null;

    private $secure = null;

    /**
     * @param $options
     */
    public function __construct($options)
    {
        if (isset($options["hash_len"])) {
            $this->hash_len = $options["hash_len"];
        }

        if (isset($options["hash_algo"])) {
            $this->hash_algo = $options["hash_algo"];
        }

        if (isset($options["domain"])) {
            $this->domain = $options["domain"];
        }

        if (isset($options["path"])) {
            $this->path = $options["path"];
        }

        if (isset($options["httpOnly"])) {
            $this->httpOnly = $options["httpOnly"];
        }
        if (isset($options["secure"])) {
            $this->secure = $options["secure"];
        }

        // If hash secret is empty, we need to set a default one
        if (!isset($options["hash_secret"]) || empty($options["hash_secret"])) {
            $options["hash_secret"] = $this->default_hash_secret();
        }
        $this->hash_secret = $options["hash_secret"];
    }
    /**
     * Calculates the default_hash_secret to use as a fallback if no secret is passed. It's
     * a bad idea to rely on this in production.
     */
    protected function default_hash_secret()
    {
        // This is not good, it's easily leakable to the outside world,
        // but it's predictable and doesn't require much server state. It's a bad
        // idea to depend on this and probably won't work with multiple servers or
        // with multiple PHP-FPM/Apache processes.
        return md5(php_uname() . getmypid());
    }
    public function get($name, $default = null)
    {
        if (!$this->has($name)) {
            return $default;
        }
        $raw = base64_decode($_COOKIE[$name]);
        // Cookie should be atleast the size of the hash length.
        // If it's not, we can just bail out
        if (strlen($raw) < $this->hash_len) {
            return $default;
        }
        // The cookie data contains the actual data w/ the hash concatonated to the end,
        // since the hash is a fixed length, we can extract the last hash_length chars
        // to get the hash.
        $hash = substr($raw, strlen($raw) - $this->hash_len, $this->hash_len);
        $data = substr($raw, 0, -($this->hash_len));
        // Calculate what the hash should be, based on the data. If the data has not been
        // tampered with, $hash and $hash_calculated will be the same
        $hash_calculated = hash_hmac($this->hash_algo, $data, $this->hash_secret);
        // If we calculate a different hash, we can't trust the data.
        if ($hash_calculated !== $hash) {
            throw new \Exception("If we calculate a different hash, we can't trust the data.");
        }
        return $data;
    }
    /**
     * Checks if a cookie exists or not.
     *
     * @param string $name name of the cookie to check for
     *
     * @return true if the cookie exists, false otherwise
     */
    public function has($name)
    {
        return isset($_COOKIE[$name]);
    }
    public function make($name, $value, $seconds = 0)
    {
        // Calculate a hash for the data and append it to the end of the data string
        $hash = hash_hmac($this->hash_algo, $value, $this->hash_secret);
        $value .= $hash;
        // Set a cookie with the data
        $ttl = time() + $seconds;
        return setcookie($name, base64_encode($value), $ttl, $this->path, $this->domain);
    }
    public function forget($name)
    {
        return setcookie($name, '', time());
    }
}