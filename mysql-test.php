<?php

require_once "DB.php";
require_once "DB_functions.php";

$success = connect("localhost", "world", "root", "");

var_dump($success);