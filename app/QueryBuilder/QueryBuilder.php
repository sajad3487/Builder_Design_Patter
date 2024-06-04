<?php

namespace App\QueryBuilder;

abstract class QueryBuilder
{
    protected $query;

    public function __construct()
    {
        $this->query = new \stdClass();
        $this->query->sql = '';
    }

    public function build()
    {
        return $this->query->sql;
    }
}
