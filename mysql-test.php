<?php

require_once "DB.php";
require_once "DB_functions.php";
require_once "Country.php";

$success = connect("localhost", "world", "root", "");

// var_dump($success);

$query = "
    SELECT `cities`.*
    FROM `cities`
    WHERE `population` > 2000000
    OR `country_id` = 2
";

$result = select($query);

var_dump($result);