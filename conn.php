<?php

$localhost  = "localhost";
$username   = "root";
$password   = "";
$db         = "fb";

try {
    
    $conn = new PDO("mysql:host=$localhost;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    
    echo "Connection failed: " . $e->getMessage();
    
}

