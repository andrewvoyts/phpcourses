<?php

namespace DB;

class Select
{
    private $columns = [];
    private $table;

    public function __construct(string $table, $columns = ['*'])
    {
        $this->table = $table;
        $this->columns = $columns;
    }

    public function buildString()
    {

        return sprintf('SELECT %s FROM %s', implode(',', $this->columns), $this->table);

    }

}