<?php

require_once "DB.php";
require_once "DB_functions.php";
require_once "Country.php";


$get_cities = function($page_nr)
{
    $offset = ($page_nr-1) * 20;

    $query = "
    SELECT `cities`.*
    FROM `cities`
    ORDER BY `cities`.`id` ASC
    LIMIT  {$offset}, 20
    ";

    return $query;
};


$success = connect("localhost", "world", "root", "");

// var_dump($success);

// $query = "
//     SELECT `cities`.*
//     FROM `cities`
//     ORDER BY `cities`.`population` DESC
//     LIMIT 100
// ";

$result = select($get_cities(5));

var_dump($result);