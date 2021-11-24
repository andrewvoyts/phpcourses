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

        $selectObj = new Select('posts');

        $whereArr=[];

        $whereArr[] = (new Where())->setColumn('id')->setOperator('BETWEEN')->setValue([5,8]);
        $whereArr[] = (new Where())->setColumn('title')->setOperator('IN')->setValue(['abc','cde','zxc'])->setCondition('OR');
        $whereArr = Where::create('id','BETWEEN',[5,8]);
        $whereArr = Where::create('id',5);
        $whereArr = Where::create(['id'=>5,'title'=>'test']);
        $whereArr = Where::create(['id'=>5,'LIKE'=>['title'=>'%abc%'],'IN'=>['name'=>['abc','cde','zxc']]]);

        $selectString = $selectObj->buildString();
        $whereString = '';

        foreach ($whereArr as $whereVar)
        {
            if($whereString != ''){
                $whereString .= ' '.$whereVar->getCondition().' ';
            }
            $whereString .= $whereVar->buildString();
        }

        var_dump($query = $selectString.' WHERE '.$whereString);

    }
}