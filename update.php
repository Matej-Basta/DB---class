<?php

require_once "DB.php";
require_once "DB_functions.php";


$success = connect("localhost", "world", "root", "");

$query = "
    UPDATE `cities`
    SET `name` = ?
    WHERE `id` = 3339
";

$result = update($query, ["Prague"]);

var_dump($result);