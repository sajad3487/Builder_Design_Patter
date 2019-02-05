<?php
namespace App;

require_once __DIR__ . '/QueryBuilder/QueryBuilder.php';
require_once __DIR__ . '/QueryBuilder/SelectBuilder.php';
require_once __DIR__ . '/QueryBuilder/InsertBuilder.php';
require_once __DIR__ . '/QueryBuilder/UpdateBuilder.php';
require_once __DIR__ . '/QueryBuilder/DeleteBuilder.php';

use \App\QueryBuilder\QueryBuilder;
use \App\QueryBuilder\SelectBuilder;
use \App\QueryBuilder\InsertBuilder;
use \App\QueryBuilder\UpdateBuilder;
use \App\QueryBuilder\DeleteBuilder;

// Example usage
$selectQuery = (new SelectBuilder())
    ->select(['id', 'name', 'email'])
    ->from('users')
    ->where('age', '>', 18)
    ->orderBy('name', 'ASC')
    ->build();

echo "SELECT Query: $selectQuery";
echo "<br>";

$insertQuery = (new InsertBuilder())
    ->into('users')
    ->values(['name' => 'John', 'email' => 'john@example.com', 'age' => 25])
    ->build();

echo "INSERT Query: $insertQuery";
echo "<br>";

$updateQuery = (new UpdateBuilder())
    ->table('users')
    ->set(['name' => 'Jane', 'age' => 30])
    ->where('id', '=', 1)
    ->build();

echo "UPDATE Query: $updateQuery";
echo "<br>";

$deleteQuery = (new DeleteBuilder())
    ->from('users')
    ->where('id', '=', 1)
    ->build();

echo "DELETE Query: $deleteQuery";
echo "<br>";
