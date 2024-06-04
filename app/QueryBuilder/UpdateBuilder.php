<?php

namespace App\QueryBuilder;

require_once __DIR__ . '/QueryBuilder.php';


use QueryBuilder;

class UpdateBuilder extends \App\QueryBuilder\QueryBuilder
{
    public function __construct()
    {
        parent::__construct();
        $this->query->sql = 'UPDATE ';
    }

    public function table($table)
    {
        $this->query->sql .= $table;
        return $this;
    }

    public function set($data)
    {
        $setString = implode(', ', array_map(function ($key, $value) {
            return "$key = '$value'";
        }, array_keys($data), $data));
        $this->query->sql .= " SET $setString";
        return $this;
    }

    public function where($field, $operator, $value)
    {
        $this->query->sql .= " WHERE $field $operator '$value'";
        return $this;
    }
}
