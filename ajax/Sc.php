<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';

$id = $_POST['id'];
$csime = $_POST['csime'];
$ceime = $_POST['ceime'];


$ucsime = strtotime($csime);
$uceime = strtotime($ceime);
$lime = $uceime - $ucsime;


$sql = "update punch set lime = '$lime',sime = '$ucsime',eime = '$uceime' where id = '$id'";
  if ($conn->query($sql) === TRUE) {
  }


$conn->close();

echo "<script> alert('修改成功');parent.location.href='../index.html'; </script>"; 


?>