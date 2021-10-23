<?php
error_reporting(1);
include_once __DIR__ . '/functions.php';

set_exception_handler(function($exception) {
    echo $exception->getMessage() . '<br>';
    echo $exception->getLine() . '<br>';
    echo $exception->getFile() . '<br>';
    echo $exception->getTrace() . '<br>';
    echo $exception->getCode() . '<br>';
    echo $exception->getTraceAsString() . '<br>';

    redirect('/error');
});
//trigger_error('test error', E_USER_ERROR);
throw new Exception('This is exception');

use App\Core\FileHandlerLog;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$logger = new Logger('Logger');
$logger->pushHandler(new StreamHandler(__DIR__ . '/storage/error.log', Logger::ERROR));

set_exception_handler(function($exception) use ($logger) {
    $logger->error('Exception has been thrown', [
        $exception->getMessage(), 
        $exception->getLine(), 
        $exception->getFile(), 
        $exception->getTrace(), 
        $exception->getCode(), 
        $exception->getTraceAsString()
    ]);
    redirect('/error');
});
