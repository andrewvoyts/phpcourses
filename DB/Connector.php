<?php

namespace DB;

use PDO;

class Connector
{
    public function __construct()
    {
        $config= include __DIR__.'/../Config/database.php';
        $connectionConfig = $config['driver']. ':host='.$config['host'].':'.$config['port'] .';dbname='.$config['db_name'];
        $this->connect = new PDO($connectionConfig,$config['user'],$config['pass']);
        var_dump ($this->connect);
        echo '<pre>';
        var_dump($this->connect->query('SELECT * FROM posts')->fetchAll());
        echo '</pre>';
    }

}