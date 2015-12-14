<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午1:24
 */
namespace Sirius;

class Config {

    /**
     * @var array
     */
    private static $_data = [];

    /**
     * @param $key
     * @param null $default
     * @return null
     */
    public static function get($key, $default = null) {
        list($filename, $fileds) = static::format($key);

        if (!array_key_exists($filename, static::$_data)) {
            static::$_data[$filename] = static::load($filename);
        }

        $value = $default;

        if (is_array($fileds) && !empty($fileds)) {
            $value = static::$_data[$filename];
            foreach($fileds as $key) {
                $value = @$value[$key];
            }
        } else {
            $value = static::$_data[$filename];
        }

        return $value;
    }

    /**
     * @param $key
     * @return array
     */
    private static function format($key) {
        $key = explode(".", $key);
        return [$key[0],array_slice($key, 1)];
    }

    /**
     * @param $filename
     * @return array|mixed
     */
    private static function load($filename) {
        $config = [];
        if (file_exists(BASE_PATH . "/config/$filename.php")) {
            $config = include(BASE_PATH . "/config/$filename.php");
        }

        if (defined("APP_ENVIRONMENT")) {
            if (file_exists(BASE_PATH . "/config/" . APP_ENVIRONMENT . "/$filename.php")) {
                $config_ENVIRONMENT = include(BASE_PATH . "/config/" . APP_ENVIRONMENT . "/Config.php");
                $config = array_merge($config, $config_ENVIRONMENT);
            }
        }

        return $config;
    }
}