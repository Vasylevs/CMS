<?php

namespace core;


class ErrorHandler
{

    public function __construct()
    {
        if(DEBUG){
            error_reporting(-1);
        }else{
            error_reporting(0);
        }
        set_exception_handler($this,'exceptionHandler');
    }

    public function exceptionHandler($exception){
        $this->logErrors($exception->getMass(),$exception->getFile(),$exception->getLine());
    }

    /**
     * @param string $mass
     * @param string $file
     * @param string $line
     */
    protected function logErrors($mass = '', $file = '', $line = ''){
        error_log("[".date('Y-m-d H:i:s')."] Text error: {$mass} | File: {$file} | Line: {$line} \n--------\n", 3, ROOT.'/tmp/errors.log');
    }

    /**
     * @param $errno
     * @param $errstr
     * @param $errfile
     * @param $errline
     * @param int $code
     */
    public function showErrors($errno, $errstr, $errfile, $errline, $code = 404){
        http_response_code($code);
        if ($code == 404 && !DEBUG){
            require WWW . '/errors/404.php';
            die;
        }
        if(DEBUG){
            require WWW. '/errors/dev.php';
        }else{
            require WWW. '/errors/prod.php';
        }
        die;
    }

}