<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';
$id = $_POST['id'];
//$type = 1;

  $sql = "select id,name,from_unixtime(sime,'%Y-%m-%d %H:%i') sime,from_unixtime(eime,'%Y-%m-%d %H:%i') eime,tid,remarks from punch where id = '$id'";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $pn[] = $row;
      }
    }

echo json_encode($pn);

$conn->close();

?>