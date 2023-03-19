<?php
$dbHost = "localhost"; // Địa chỉ host của database
$dbUser = "root"; // Tên đăng nhập cho database
$dbPass = ""; // Mật khẩu đăng nhập cho database
$dbName = "mechanical_shop"; // Tên database

try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
