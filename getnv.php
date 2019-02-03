<?php
header('Content-type:text/html; Charset=utf8'); 
header( "Access-Control-Allow-Origin:*"); 
header('Access-Control-Allow-Methods:POST');   
header('Access-Control-Allow-Headers:x-requested-with,content-type');
include 'conn.php';
$cat = $_POST['cat'];
//$cat = '日常';

$sql = "SELECT id FROM event where name = '$cat'";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $pid = $row['id'];
      }
    }

$sql = "SELECT count(id) cid FROM event where pid = $pid";
  $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
      echo $row['cid'];      
    }
    
$conn->close();

?>