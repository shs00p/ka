<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';

$num = $_POST['num'];
$id = $_POST['id'];
$name = $_POST['name'];
$pid = $_POST['pid'];
$type = $_POST['type'];

// $id = 6;
// $name = "健腹轮";
// $pid = 2;
// $type = 3;
// $num = 12;

$sql = "update event set lime = ".time()." where id = '$id'";
if ($conn->query($sql) === TRUE) {
}


$sql = "insert into punch (name,eid,tid,pid,pime,num,state) value ('$name','$id','$type','$pid',".time().",'$num',1)";
  if ($conn->query($sql) === TRUE) {
    echo 1;
  }


$conn->close();

?>