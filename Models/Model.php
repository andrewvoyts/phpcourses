<?php

namespace Models;

use Core\View;

class Model
{
    public function getAdminsList()
    {
        $admins = [
            [
                "id"=>1,
                "email"=>"bob@a.com",
            ],
            [
                "id"=>2,
                "email"=>"dan@a.com"
            ],
        ];
        (new View)->generate('AdminViews/index.php',['admins'=>$admins]);
    }

    public function getUsersList()
    {
        $users = [
            [
                "id" => 1,
                "email" => "user1@a.com",
            ],
            [
                "id" => 2,
                "email" => "user2@a.com"
            ],
        ];
        (new View)->generate('HomeViews/index.php', ['users' => $users]);
    }
}
