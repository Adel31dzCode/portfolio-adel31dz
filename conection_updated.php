<?php

$servername = "localhost";
$username_sr = "root";
$password_sr = "";
$dbname = "base";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username_sr, $password_sr);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}  



?>