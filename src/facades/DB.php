<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午1:09
 */
namespace Sirius\Facades;

/**
 * Class Illuminate\Database\Capsule\Manager
 */
class DB {
    /**
     * @var Illuminate\Database\Capsule\Manager
     */
    private static $_instance = null;

    /**
     * @return \Illuminate\Database\Capsule\Manager
     */
    public static function instance(){

        if (static::$_instance === null) {
            $config = Config::get("database");
            static::$_instance = new Illuminate\Database\Capsule\Manager();

            if ($config["connections"] && is_array($config["connections"])) {
                foreach($config["connections"] as $key=>$cfg) {
                    static::$_instance->addConnection($cfg, $key);
                }
            }
            static::$_instance->setAsGlobal();
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