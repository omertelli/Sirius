<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/5
 * Time: 下午9:44
 */
namespace Sirius\Facades;

use Sirius\Logger;

class Log {
    /**
     * @var Logger
     */
    private static $instance = null;

    /**
     * @return Logger
     */
    public static function getLogger() {
        if (static::$instance === null) {
            static::$instance = new Logger(new \Monolog\Logger(
                gethostname()
            ));

            //default log
            static::$instance->useDailyFiles(BASE_PATH . "/app/logs/sirius.log",7);
        }

        return static::$instance;
    }

    /**
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return call_user_func_array([static::getLogger(), $method], $parameters);
    }
}