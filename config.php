<?php

$db_host = getenv ("pb_db_host");
$db_user = getenv ("pb_db_user");
$db_pass = getenv ("pb_db_pass");
$db_name = "sosmed";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
