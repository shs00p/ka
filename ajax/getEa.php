<?php
header('Content-type:text/html; Charset=gb2312'); 
include '../conn.php';

$id = $_POST['id'];
//$id = 2;

$sql = "SELECT id,name,pid,type FROM event where pid = $id order by lime desc";
$result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $eame[] = $row;
    }
  }
  
echo json_encode($eame);



    
$conn->close();

?>