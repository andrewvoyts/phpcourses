<?php

namespace core;
class Router
{
    public int $a = 5;
    public string $b = "Hello";

    public function run()
    {
     echo var_export(get_class_vars(Router::class));
    }
}