<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/11
 * Time: 下午5:03
 */
namespace Sirius\Facades;

class Session {
    private static $_instance = null;

    /**
     * @return null
     * @throws \Exception
     */
    public static function instance(){
        if (static::$_instance === null) {

            $session = Config::get("session");

            $storage = "\\Sirius\\Session\\Adapter\\";

            switch($session["adapter"]) {
                case "Cookie":
                    $config = Config::get("cookie");
                    break;
                case "Memcached" :
                    $config = Config::get("cache.memcache.session");
                    break;
                case "Redis" :
                    $config = Config::get("cache.redis.session");
                    break;
                default:
                    throw new \Exception("Session adapter not found :".$session["adapter"]);
            }

            $storage .= $session["adapter"];
            self::$_instance = new $storage(array_merge($session,$config));
        }

        return static::$_instance;
    }

    /**
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return call_user_func_array([static::instance(), $method], $parameters);
    }
}