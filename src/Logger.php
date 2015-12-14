<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/5
 * Time: 下午9:57
 */
namespace Sirius;

use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonologLogger;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\ErrorLogHandler;
use Monolog\Handler\RotatingFileHandler;

class Logger {

    /**
     * @var MonologLogger
     */
    protected $monolog;

    protected $levels = array(
        'debug',
        'info',
        'notice',
        'warning',
        'error',
        'critical',
        'alert',
        'emergency',
    );

    public function __construct(MonologLogger $monolog)
    {

        $this->monolog = $monolog;
    }

    /**
     * Register a file log handler.
     *
     * @param  string  $path
     * @param  string  $level
     * @return void
     */
    public function useFiles($path, $level = 'debug')
    {
        $level = $this->parseLevel($level);

        $this->monolog->pushHandler($handler = new StreamHandler($path, $level));

        $handler->setFormatter($this->getDefaultFormatter());
    }

    /**
     * Register a daily file log handler.
     *
     * @param  string  $path
     * @param  int     $days
     * @param  string  $level
     * @return void
     */
    public function useDailyFiles($path, $days = 0, $level = 'debug')
    {
        $level = $this->parseLevel($level);

        $this->monolog->pushHandler($handler = new RotatingFileHandler($path, $days, $level));

        $handler->setFormatter($this->getDefaultFormatter());
    }

    /**
     * Register an error_log handler.
     *
     * @param  string  $level
     * @param  integer $messageType
     * @return void
     */
    public function useErrorLog($level = 'debug', $messageType = ErrorLogHandler::OPERATING_SYSTEM)
    {
        $level = $this->parseLevel($level);

        $this->monolog->pushHandler($handler = new ErrorLogHandler($messageType, $level));

        $handler->setFormatter($this->getDefaultFormatter());
    }

    /**
     * Get a default Monolog formatter instance.
     *
     * @return \Monolog\Formatter\LineFormatter
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter(null, null, true);
    }

    /**
     * Parse the string level into a Monolog constant.
     *
     * @param $level
     * @return int
     * @throws Exception
     */
    protected function parseLevel($level)
    {
        switch ($level)
        {
            case 'debug':
                return MonologLogger::DEBUG;

            case 'info':
                return MonologLogger::INFO;

            case 'notice':
                return MonologLogger::NOTICE;

            case 'warning':
                return MonologLogger::WARNING;

            case 'error':
                return MonologLogger::ERROR;

            case 'critical':
                return MonologLogger::CRITICAL;

            case 'alert':
                return MonologLogger::ALERT;

            case 'emergency':
                return MonologLogger::EMERGENCY;

            default:
                throw new \Exception("Invalid log level.");
        }
    }

    /**
     * @param $method
     * @param $parameters
     * @return mixed
     * @throws Exception
     */
    public function __call($method, $parameters)
    {
        if (in_array($method, $this->levels))
        {
            $method = 'add'.ucfirst($method);

            return call_user_func_array(array($this->monolog, $method), $parameters);
        }

        throw new \Exception("Method [$method] does not exist.");
    }
}