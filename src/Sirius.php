<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/11/26
 * Time: 下午2:23
 */
namespace Sirius;

use FastRoute\Dispatcher as Dispatcher;
use FastRoute\RouteCollector;

class Sirius {
    /**
     * @var \FastRoute\cachedDispatcher $dispatcher
     */
    private $dispatcher = null;

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

        $dispatcher = \FastRoute\cachedDispatcher(function(RouteCollector $r) {
            include BASE_PATH.'/config/routes.php';
        },[
            'cacheFile' => BASE_PATH . '/app/cache/route.cache', /* required */
            'cacheDisabled' => APP_ENVIRONMENT == 'develop' && !DEBUG ? true : false,
        ]);

        $this->dispatcher = $dispatcher;
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
     * @throws Exception
     */
    public function run(){
        //load filter
        require BASE_PATH. '/config/filter.php';


        // Fetch method and URI from somewhere
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $routeInfo = $this->dispatcher->dispatch($httpMethod, $uri);
        switch ($routeInfo[0]) {
            case Dispatcher::NOT_FOUND:
                throw new \Exception("route Not Found!",405);
                break;
            case Dispatcher::METHOD_NOT_ALLOWED:
                throw new \Exception( $routeInfo[1] ." Not Allowed!",405);
                break;
            case Dispatcher::FOUND:
                $this->excute($routeInfo[1], $routeInfo[2]);
                break;
        }
    }

    /**
     * @param $route
     * @param null $params
     * @throws \Exception
     */
    public function excute($route, $params = null) {

        $beforeFilter = null;
        $afterFilter = null;
        if (is_array($route)) {
            if (!isset($route["use"]) || !$route["use"]) {
                throw new \Exception("route config error. E.G: ['use'=>callable]", 3);
            }

            if (isset($route["before"]) && $route["before"]) {
                $beforeFilter = $route["before"];
            }
            if (isset($route["after"]) && $route["after"]) {
                $afterFilter = $route["after"];
            }

            $route = $route["use"];
        }

        if(is_object($route)){
            $this->doBeforeFilter($beforeFilter);
            $result = call_user_func_array($route, $params);
            $this->doAfterFilter($afterFilter);
            if ($result instanceof Illuminate\View\View) {
                echo $result->render();
            } else if (is_string($result)) {
                echo $result;
            }
        } else {
            //grab the controller name and method call
            $segments = explode('@',$route);

            //instanitate controller
            $controller = new $segments[0]();
            $action = $segments[1]."Action";

            //fix multi parameters
            if(!method_exists($controller, $action)){
                throw new \Exception("Controller:" . $segments[0] ." Method:". $action ." Not Found!",404);
            }else{
                $this->doBeforeFilter($beforeFilter);
                $result = call_user_func_array(array($controller, $action), $params);
                $this->doAfterFilter($afterFilter);
                if ($result instanceof \Illuminate\View\View) {
                    echo $result->render();
                } else if (is_string($result)) {
                    echo $result;
                }
            }
        }

    }

    /**
     * @param $filters
     * @throws Exception
     */
    public function doFilter ($filters) {
        if (!$filters || !is_array($filters)) return ;

        foreach($filters as $filter) {
            Filter::run($filter);
        }
    }

    /**
     * @param $filters
     */
    public function doBeforeFilter($filters) {
        if (is_string($filters)) {
            $filters = explode("|", $filters);
        } else {
            $filters= [];
        }

        array_unshift($filters, Filter::FILTER_BEFORE);

        return $this->doFilter($filters);
    }

    /**
     * @param $filters
     */
    public function doAfterFilter($filters) {
        if (is_string($filters)) {
            $filters = explode("|", $filters);
        } else {
            $filters= [];
        }

        array_unshift($filters, Filter::FILTER_AFTER);

        return $this->doFilter($filters);
    }
}