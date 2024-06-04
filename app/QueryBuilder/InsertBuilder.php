<?php

namespace App\QueryBuilder;

require_once __DIR__ . '/QueryBuilder.php';

use \App\QueryBuilderQueryBuilder;

class InsertBuilder extends QueryBuilder
{
    public function __construct()
    {
        parent::__construct();
        $this->query->sql = 'INSERT INTO ';
    }

    public function into($table)
    {
        $this->query->sql .= $table;
        return $this;
    }

    public function values($data)
    {
        $fields = implode(', ', array_keys($data));
        $values = implode(', ', array_map(function ($value) {
            return "'" . $value . "'";
        }, $data));
        $this->query->sql .= " ($fields) VALUES ($values)";
        return $this;
    }
}
