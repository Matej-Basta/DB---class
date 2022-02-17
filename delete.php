<?php

require_once "DB.php";
require_once "DB_functions.php";
require_once "Region.php";

$success = connect("localhost", "world", "root", "");

$query = "
    DELETE
    FROM `regions`
    WHERE `slug` LIKE '%america%'
";

// $result = delete($query);

// echo $result;

// $region = select_one("SELECT * FROM `regions` WHERE `name` = ?", ['South Asia'], 'Region');

// $result = $region->delete();

// echo $result;ˇ

$query2 = "
    TRUNCATE TABLE `regions`
";

delete($query2);

$query3 = "
    DROP TABLE IF EXISTS `regions`
";

delete($query3);