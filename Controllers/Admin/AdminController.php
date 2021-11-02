<?php

namespace Controllers\Admin;

use Core\View;
use Models\Model;

class AdminController
{
    public function run()
    {
        (new Model)->getAdminsList();
    }
}