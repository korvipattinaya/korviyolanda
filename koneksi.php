<?php

$db_host = "localhost:3306";
$db_user = "korviyol_user";
$db_pass = "korviyola2212";
$db_name = "korviyol_database";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
