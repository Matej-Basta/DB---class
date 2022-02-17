<?php

require_once "DB.php";
require_once "DB_functions.php";


$success = connect("localhost", "world", "root", "");

$query = "
    UPDATE `countries`
    SET `population` = ?,
        `GNP` = ?
    WHERE `name` = 'United States Minor Outlying Islands'
";

$result = update($query, ['300', 13.91]);

var_dump($result);