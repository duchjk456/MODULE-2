<?php namespace a;
class Application {
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance(); // null => new app
var_dump($app1);
$app2 = Application::getInstance();
var_dump($app2);