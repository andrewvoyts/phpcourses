<?php

namespace Core;

class View
{
    public function generate($path,$dataArr=[])
    {
        extract($dataArr);
        $filePath = __DIR__."/../Views/".$path;
        include $filePath;
    }
}