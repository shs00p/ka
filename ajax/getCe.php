<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';
$id = $_POST['id'];
$usime = $_POST['usime'];
$now = time();
$lime = $now- $usime;
$remarks = $_POST['remarks'];

$sql = "update punch set eime = '$now',lime = '$lime',remarks = '$remarks' where id = '$id'";
if ($conn->query($sql) === TRUE) {
  echo "1";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>