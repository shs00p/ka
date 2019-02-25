<?php
header('Content-type:text/html; Charset=gb2312'); 
include '../conn.php';

$p = $_POST['p'];
//$id = 2;

  // $sql = "SELECT name FROM event where pid = $id order by lime desc";
  // $result = $conn->query($sql);
  //   if ($result->num_rows > 0) {
  //     while($row = $result->fetch_assoc()) {
  //       $eame[] = $row['name'];
  //     }
  //   }
    
    //echo "多少分";
    echo 1;
    //


    
$conn->close();

?>