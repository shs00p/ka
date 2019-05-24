<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';



  $sql = "select num,from_unixtime(pime,'%m-%d') pime from punch where name = '体重' order by id asc";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $tz[] = $row;       
      }
    }



echo json_encode($tz);

$conn->close();

?>