<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/27
 * Time: 下午12:07
 */
namespace Sirius;

class Cookie {

    private static $_instance = null;

    private static $_data = [];

    private $domain = null;

    private $path = "/";

    private $expired = 3600;

    private $httpOnly = null;

    private $secure = null;

    public function __construct(){
        $config = Config::get("cookie");

        if (isset($config["domain"])) {
            $this->domain = $config["domain"];
        }
        if (isset($config["path"])) {
            $this->path = $config["path"];
        }
        if (isset($config["expired"])) {
            $this->expired = $config["expired"];
        }
        if (isset($config["httpOnly"])) {
            $this->httpOnly = $config["httpOnly"];
        }
        if (isset($config["secure"])) {
            $this->secure = $config["secure"];
        }
    }

    /**
     * @return Cookie
     */
    public static function instance(){
        if (static::$_instance === null) {
            static::$_instance = new self();
        }

        return static::$_instance;
    }

    /**
     * @param $name
     * @param $value
     * @param null $expired
     * @param null $path
     * @param null $daomain
     * @return bool
     */
    public function _save($name, $value, $expired = null, $path = null, $daomain = null) {
        if ($expired === null) {
            $expired = $this->expired;
        }
        $expired = time() + $expired;

        if ($path === null) {
            $path = $this->path;
        }

        if ($daomain === null) {
            $daomain = $this->domain;
        }

        /**
         * 写入缓存区
         */
        static::$_data[$name] = $value;

        return setcookie($name,$value,$expired,$path,$daomain, $this->secure, $this->httpOnly);
    }

    /**
     * @param $name
     * @return string
     */
    public function _get($name) {
        $value = "";

        /**
         * Cookie未生效，从大缓存区读取
         */
        if (isset(static::$_data[$name])) {
            return static::$_data[$name];
        }

        if (isset($_COOKIE[$name])) {
            $value = $_COOKIE[$name];
        }

        return $value;
    }

    /**
     * @param $name
     * @return bool
     */
    public function _delete($name) {
        /**
         * 如果缓存区有，删除
         */
        if (isset(static::$_data[$name])) {
            unset(static::$_data[$name]);
        }

        if (isset($_COOKIE[$name])) {
            unset($_COOKIE[$name]);
            return setcookie($name, "", time() - 3600,$this->path);
        }

        return false;
    }

    /**
     * @param $name
     * @return bool
     */
    public function _exists($name) {

        $exists = isset($_COOKIE[$name]);

        if (isset(static::$_data[$name])) {
            $exists = true;
        }

        return $exists;
    }

    /**
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return call_user_func_array([static::instance(), "_".$method], $parameters);
    }
}