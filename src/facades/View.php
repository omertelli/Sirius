<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午6:22
 */
namespace Sirius\Facades;

use Philo\Blade\Blade;

class View {

    private static $_instance = null;

    /**
     * @return \Philo\Blade\Blade
     */
    public static function instance(){
        if (static::$_instance === null) {
            $blade = new Blade(BASE_PATH."/app/views", BASE_PATH."/app/cache");
            static::$_instance = $blade->view();
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