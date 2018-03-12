<?php
namespace db\factory;


require "mysqldbFactory.php";
require "ssdbFactory.php";

$a = new \db\factory\mysqldbFactory();
$a->createDB()->conn();

echo "<br>";

$b = new \db\factory\ssdbFactory();
$b->createDB()->conn();