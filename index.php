<?php

require __DIR__.'./vendor/autoload.php';

use Core\Router;

$pathSegments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

if (empty($pathSegments) || $pathSegments[0] === '') {
    (new Router())->run('home', 'run');
} else {
    (new Router())->run($pathSegments[0], $pathSegments[1] ?? 'run');
}
