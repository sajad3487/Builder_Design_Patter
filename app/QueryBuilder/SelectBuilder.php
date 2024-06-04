<?php
namespace App\QueryBuilder;
use QueryBuilder;
require_once __DIR__ . '/QueryBuilder.php';


class SelectBuilder extends \App\QueryBuilder\QueryBuilder
{
    public function __construct()
    {
        parent::__construct();
        $this->query->sql = 'SELECT ';
    }

    public function select($fields)
    {
        $this->query->sql .= implode(', ', $fields);
        return $this;
    }

    public function from($table)
    {
        $this->query->sql .= ' FROM ' . $table;
        return $this;
    }

    public function where($field, $operator, $value)
    {
        $this->query->sql .= " WHERE $field $operator '$value'";
        return $this;
    }

    public function orderBy($field, $direction)
    {
        $this->query->sql .= " ORDER BY $field $direction";
        return $this;
    }
}
