<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';

$id = $_POST['id'];
$name = $_POST['name'];
$pid = $_POST['pid'];


$sql = "update event set lime = ".time()." where id = '$id'";
if ($conn->query($sql) === TRUE) {
}

$sql = "insert into punch (name,eid,tid,pid,sime) value ('$name','$id',2,'$pid',".time().")";
  if ($conn->query($sql) === TRUE) {
    echo 1;
  }

$conn->close();

?>