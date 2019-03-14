<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';
$id = $_POST['id'];

$sql = "update punch set eime = ".time()." where id = '$id'";
if ($conn->query($sql) === TRUE) {
  echo "1";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>