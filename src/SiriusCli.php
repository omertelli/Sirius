<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午2:23
 */
namespace Sirius;

class SiriusCli {

    private $alias = [
        "Config" => "\\Sirius\\Config",
        "Cookie" => "\\Sirius\\Cookie",
        "Filter" => "\\Sirius\\Filter",
        "Log" => "\\Sirius\\Facades\\Log",
        "Cache" => "\\Sirius\\Facades\\Cache",
        "DB" => "\\Sirius\\Facades\\DB",
        "Session" => "\\Sirius\\Facades\\Session",
        "View" => "\\Sirius\\Facades\\View",
        "SiriusRedis" => "\\Sirius\\Facades\\Redis",
    ];

    public function __construct(){
        $this->alias();
    }

    public function alias() {

        $alias = $this->alias;

        if (file_exists(BASE_PATH.'/config/loader.php')) {
            $load = include BASE_PATH.'/config/loader.php';
            if ($load["alias"]) {
                $alias = array_merge($alias,(array)$load["alias"]);
            }
        }

        foreach ($alias as $name => $class) {
            class_alias($class, $name);
        }
    }

    /**
     * @param $argv
     * @throws \Exception
     */
    public function run($argv){

        /**
         * @todo 处理console应用参数
         */
        $arguments = array();
        foreach ($argv as $k => $arg) {
            if ($k == 1) {
                $arguments['task'] = $arg;
            } elseif ($k == 2) {
                $arguments['action'] = $arg;
            } elseif ($k >= 3) {
                $arguments['params'][] = $arg;
            }
        }

        if (!$arguments['task']) {
            throw new \Exception("没有需要执行的脚本对象名称");
        }

        $controller = ucfirst($arguments['task']) . "Command";
        $action = $arguments['action'] ? $arguments['action'] : "index";
        $params = $arguments['params'];

        $Job = new $controller();
        call_user_func(array($Job, $action), $params);
    }
}