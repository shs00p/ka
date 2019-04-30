<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';

$id = $_POST['id'];
$name = $_POST['name'];
$pid = $_POST['pid'];
$remarks = $_POST['remarks'];
if (strlen($remarks) == 0) {
  $remarks = NULL;
}

$sql = "update event set lime = ".time()." where id = '$id'";
  if ($conn->query($sql) === TRUE) {
  }

$sql = "insert into punch (name,eid,tid,pid,pime,remarks,state) value ('$name','$id',1,'$pid',".time().",'$remarks',1)";
  if ($conn->query($sql) === TRUE) {
    echo 1;
  }

$conn->close();

?>