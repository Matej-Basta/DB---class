<?php

require_once "DB.php";
require_once "DB_functions.php";
require_once "Country.php";

$success = connect("localhost", "world", "root", "");

// var_dump($success);

$query = "
    SELECT `countries`.*
    FROM `countries`
    WHERE `population` > ?
";

$result = select($query, [200000000], "Country");

var_dump($result);