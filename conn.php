<?php
$servername = "bdm25683025.my3w.com";
$username = "bdm25683025";
$password = "3315315Xx";
$dbname = "bdm25683025_db";

// ��������
$conn = new mysqli($servername, $username, $password, $dbname);

// �������
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
?>
