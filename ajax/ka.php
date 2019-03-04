<?php
header('Content-type:text/html; Charset=gb2312'); 
include '../conn.php';

$id = $_POST['id'];
$name = $_POST['name'];
$pid = $_POST['pid'];
$type = $_POST['type'];

// $id = 12;
// $name = "洗澡";
// $pid = 1;
// $type = 1;

if ($type == 1) {
  $sql = "insert into punch (name,eid,tid,pid,pime) value ('$name','$id','$type','$pid',".time().")";
  if ($conn->query($sql) === TRUE) {
    echo 1;
  }
}

if ($type == 2) {
  $sql = "insert into punch (name,eid,tid,pid,sime) value ('$name','$id','$type','$pid',".time().")";
  if ($conn->query($sql) === TRUE) {
    echo 2;
  }
}
   


    
$conn->close();

?>