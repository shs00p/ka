<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';
$type = $_POST['type'];
//$type = 1;
if ($type == 0) {
  $sql = "select id,name,from_unixtime(sime,'%m-%d %H:%i') sime,sime usime from punch where sime <> '' and ISNULL(eime) order by id asc";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $pn[] = $row;
      }
    }
}

if ($type == 1) {
  $sql = "select id,name,from_unixtime(sime,'%m-%d %H:%i') sime,from_unixtime(eime,'%H:%i') eime,lime from punch where sime <> '' and eime is not null order by id desc";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $pn[] = $row;
      }
    }
}

echo json_encode($pn);

$conn->close();

?>