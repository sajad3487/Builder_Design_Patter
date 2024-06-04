<?php

namespace App\QueryBuilder;

require_once __DIR__ . '/QueryBuilder.php';

use \App\QueryBuilderQueryBuilder;

class DeleteBuilder extends QueryBuilder
{
    public function __construct()
    {
        parent::__construct();
        $this->query->sql = 'DELETE FROM ';
    }

    public function from($table)
    {
        $this->query->sql .= $table;
        return $this;
    }

    public function where($field, $operator, $value)
    {
        $this->query->sql .= " WHERE $field $operator '$value'";
        return $this;
    }
}
