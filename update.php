<?php

require_once "DB.php";
require_once "DB_functions.php";


$success = connect("localhost", "world", "root", "");

$query = "
    UPDATE `cities`
    SET `population` = ?
    WHERE `id` = 3339
";

$result = update($query, ["1294513"]);

var_dump($result);