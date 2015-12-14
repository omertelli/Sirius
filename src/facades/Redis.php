<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/3
 * Time: 下午10:38
 */
namespace Sirius\Facades;
use Sirius\Config;

/**
 * Class Redis
 *
 *
 * //redis配置
 "redis" => array(
     "default" => array(
     "parameters" => [
         'tcp://127.0.0.1?alias=master',
         //'tcp://10.0.0.2?alias=slave-01'
     ],
     "options" => [
         //'replication' => true,
         "prefix" => "sirius:",
     ],
     ),
 ),
 */

class Redis {

    /**
     * @var  \Predis\Client[] array
     */
    private static $instance = [];

    /**
     * @param string $namespace
     * @return \Predis\Client
     * @throws \Exception
     */
    public static function connection($namespace = "default") {
        if (!isset(static::$instance[$namespace]) || !static::$instance[$namespace]) {
            $config = Config::get("cache.redis");

            if (!isset($config[$namespace])) {
                throw new \Exception("redis cache config has not key $namespace", 1);
            }
            $config = $config[$namespace];
            $parameters = $config["parameters"];
            $options = $config["options"];
            $redis = new \Predis\Client($parameters, $options);

            static::$instance[$namespace] = $redis;
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