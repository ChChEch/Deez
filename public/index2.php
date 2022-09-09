<?php


class Worker {
    private $logger;
    public function __construct($logger) {
        $this->logger = $logger;
    }
    public function work(){
        $logger = new Logger();
        for ($i=0; $i<10; $i++){
            $logger->log($i);
        }
    }
}

class Logger {
    public function log($message){
        echo $message . "\n";
    }
}

class FileLogger {
    public function log($message){
    echo $message . "\n";
    $file = fopen('log.txt', 'a');
    fwrite($file, $message . "\n");
    fclose($file);
    }
}

$worker = new Worker(new ConsoleLogger);
$worker->work();