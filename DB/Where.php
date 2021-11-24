<?php

namespace DB;

class Where
{
    private $column;
    private $operator = '=';
    private $value;
    private $condition = 'AND';

    public function buildString()
    {
        $valueString = $this->value;
        if ($this->operator == 'IN') {
            $valueString = '(' . implode(',', $this->value) . ')';
        }
        if ($this->operator == 'BETWEEN') {
            $valueString = implode(' AND ', $this->value);
        }

        return $this->column . ' ' . $this->operator . ' ' . $valueString;
    }

    public static function create($column, $operator = null, $value = null)
    {
        $whereArr = [];
        if(!is_array($column) && !is_null($operator) && !is_null($value)) {
            $whereArr[] = (new Where())->setColumn($column)->setOperator($operator)->setValue($value);
        } elseif(!is_array($column) && !is_null($operator) && is_null($value)){
            $whereArr[] = (new Where())->setColumn($column)->setValue($operator);
        } elseif(is_array($column) && is_null($operator) && is_null($value)) {
            foreach($column as $key=>$value)
            {
                if(is_array($value)){
                    foreach($value as $item=>$itemvalue)
                    {
                        $whereArr[] = (new Where())->setColumn($item)->setValue($itemvalue)->setOperator($key);
                    }
                }else{
                    $whereArr[] = (new Where())->setColumn($key)->setValue($value);
                }
            }

        }

        return $whereArr;
    }

    public function setCondition(string $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    public function setColumn(string $string)
    {
        $this->column = $string;
        return $this;
    }

    public function setOperator(string $string)
    {
        $this->operator = $string;
        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getCondition(): string
    {
        return $this->condition;
    }
}