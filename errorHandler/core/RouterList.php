<?php

namespace App\Core;

use App\Controllers\HomeController;
use App\Controllers\ModalController;

class RouterList
{
    protected static $routerRules = [];

    public static function addRouter($routerRule)
    {
        self::$routerRules[] = $routerRule;
    }

    public static function init()
    {   
        foreach (self::$routerRules as $routerRule) {
            $isEqualPath = ($routerRule['url_path'] == $_SERVER['REQUEST_URI']);
            $isEqualMethod = ($routerRule['method'] == $_SERVER['REQUEST_METHOD']);
            if ($isEqualPath && $isEqualMethod) {
                $controllerWithMethod = $routerRule['handler'];
                $controllerName = explode('@', $controllerWithMethod)[0];
                $methodName = explode('@', $controllerWithMethod)[1];
                $controller = new $controllerName;
                $controller->{$methodName}();
                return;
            }
        }

        renderView('404');
    }
}