<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // تفعيل إظهار الأخطاء
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("فشل الاتصال: " . $e->getMessage());
}
?>
