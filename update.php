<?php

require_once "DB.php";
require_once "DB_functions.php";
require_once "Region.php";


$success = connect("localhost", "world", "root", "");

// $query = "
//     UPDATE `countries`
//     SET `population` = ?,
//         `GNP` = ?
//     WHERE `name` = 'United States Minor Outlying Islands'
// ";

// $result = update($query, ['300', 13.91]);

// var_dump($result);

// $region = select_one("SELECT * FROM `regions` WHERE `name` = ?", ['Central Africa'], 'Region');

// $region->slug = "middle-africa";

// $region->update();


// $region->name = 'Equatorial Africa';
// $region->save();

$sahara = new Region;
$sahara->name = 'Sahara';
$sahara->save();

echo $sahara->id;