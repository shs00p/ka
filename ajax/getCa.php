<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';


$sql = "select id,name,from_unixtime(sime,'%m-%d %H:%i') sime from punch where sime <> '' and ISNULL(eime) order by id asc";
$result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $pn[] = $row;
    }
  }

echo json_encode($pn);

$conn->close();

?>