<?php
header('Content-type:text/html; Charset=utf8');
header( "Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
include '../conn.php';
$cat = $_POST['cat'];
//$cat = '运动';



$sql = "select COUNT(a.id) aid,COUNT(b.id) bid from event a LEFT JOIN punch b on a.pid = b.pid where a.pid = (SELECT id FROM event where name = '$cat')";
  $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
        $pn = $row['aid'] . ":" . $row['bid'];
        echo json_encode($pn);
    }

$conn->close();

?>