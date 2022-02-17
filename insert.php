<?php

require_once "DB.php";
require_once "DB_functions.php";
require_once "Country.php";

 $success = connect("localhost", "world", "root", "");

 $query = "
    INSERT 
    INTO `regions`
    (`name`, `slug`)
    VALUES
    (?, ?)
 ";

//  $countOfNewRecords = insert($query, ['Western Europe', 'western-europe']);


$query2 = "
    INSERT
    INTO `regions`
    (`name`, `slug`)
    VALUES
    (?, ?),
    (?,?),
    (?,?)
";

$countOfNewRecords = insert($query2, ['North America', 'north-america', 'Central America', 'central-america', 'South America', 'south-america']);
echo $countOfNewRecords;