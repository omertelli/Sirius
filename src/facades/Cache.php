<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/3
 * Time: 下午9:16
 */
namespace Sirius\Facades;

/**
//memcache配置
"memcache" => array(
    "default" => array(
        "servers" => [
            array("127.0.0.1",11211,5),
            //array(host,port,weight),
        ],
        "persistent_id" => null,
        "options" => array(
            Memcached::OPT_LIBKETAMA_COMPATIBLE => true,
            Memcached::OPT_PREFIX_KEY => "sirius:"
        ),
    ),
),
 */

class Cache {
    /**
     * @var  Memcached[] array
     */
    private static $instance = [];

    /**
     * @param string $namespace
     * @return Memcached
     * @throws Exception
     */
    public static function connection($namespace = "default") {
        if (!isset(static::$instance[$namespace]) || !static::$instance[$namespace]) {
            $config = Config::get("cache.memcache");

            if (!isset($config[$namespace])) {
                throw new Exception("cache config has not key $namespace", 1);
            }
            $config = $config[$namespace];
            $memcached = new Memcached($config["persistent_id"]);
            $memcached->addServers($config["servers"]);

            $options = [
                Memcached::OPT_LIBKETAMA_COMPATIBLE => true,
                Memcached::OPT_COMPRESSION => true,
            ];

            $options = array_merge($options , (array) $config["options"]);
            $memcached->setOptions($options);

            static::$instance[$namespace] = $memcached;
        }

        return static::$instance[$namespace];
    }

    /**
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return call_user_func_array([static::connection(), $method], $parameters);
    }
}