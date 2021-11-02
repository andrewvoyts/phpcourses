<?php

namespace Controllers\Home;

use Core\View;
use Models\Model;

class HomeController
{
    public function run()
    {
        (new Model)->getUsersList();
    }
}