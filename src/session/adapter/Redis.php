<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/11
 * Time: 下午2:03
 */

namespace Sirius\Session\Adapter;


use Sirius\Session\Adapter;
use Sirius\Session\AdapterInterface;

class Redis extends Adapter implements AdapterInterface
{
    protected $_redis = null;

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

        $parameters = $options["parameters"];
        $options = $options["options"];
        $this->_redis = new \Predis\Client($parameters, $options);

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
        return $this->_redis->get($sessionId, $this->_lifetime);
    }

    /**
     * {@inheritdoc}
     *
     * @param string sessionId
     * @param string data
     */
    public function write($sessionId, $data)
    {
        $this->_redis->save($sessionId, $data, $this->_lifetime);
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
        return $this->_redis->delete($sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function gc()
    {
        return true;
    }
}