<?php
$servername = "bdm25683025.my3w.com";
$username = "bdm25683025";
$password = "3315315Xx";
$dbname = "bdm25683025_db";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
?>
