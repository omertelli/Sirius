<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/4
 * Time: 下午10:06
 */
namespace Sirius;

class Filter {

    /**
     * @var array
     */
    private static $filters = [];

    const FILTER_BEFORE = "filter:before";
    const FILTER_AFTER = "filter:after";

    /**
     * @param $name
     * @param $cb
     * @throws Exception
     */
    public static function add($name, $cb) {
        if (!is_object($cb)) {
            throw new \Exception("The filter $name is not a object");
        }

        static::$filters[$name] = $cb;
    }

    /**
     * @param $name
     * @return mixed
     * @throws Exception
     */
    public static function run($name) {
        if (!isset(static::$filters[$name]) && in_array($name,[static::FILTER_BEFORE,static::FILTER_AFTER])) {
            return true;
        } else if (!isset(static::$filters[$name])) {
            throw new \Exception("The filter $name is undefined");
        }

        return call_user_func(static::$filters[$name]);
    }

    /**
     * @param $cb
     */
    public static function before($cb) {
        static::$filters[static::FILTER_BEFORE] = $cb;
    }

    /**
     * @param $cb
     */
    public static function after($cb) {
        static::$filters[static::FILTER_AFTER] = $cb;
    }
}