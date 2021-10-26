<?php

namespace Core;

use Controllers\Admin\AdminController;
use Controllers\Home\HomeController;
use Controllers\NotFoundController;

class Router
{
    public function run(string $route, ?string $segment2 = null)
    {
        switch ($route) {
            case 'home':
                $controller = new HomeController;
                break;

            case 'admin':
                $controller = new AdminController;
                break;

            default:
                $controller = new NotFoundController;
                break;
        }

        try {
            $controller->{$segment2}();
        } catch (\Throwable $exception) {
            echo 404;
        }
    }
}