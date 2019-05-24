<?php
header('Content-type:text/html; Charset=gb2312');
include '../conn.php';

$id = $_POST['id'];
$sime = $_POST['sime'];
$eime = $_POST['eime'];


// $ucsime = strtotime($csime);
// $uceime = strtotime($ceime);
$lime = $eime - $sime;

//echo $sime;
$sql = "update punch set lime = '$lime',sime = '$sime',eime = '$eime' where id = '$id'";
  if ($conn->query($sql) === TRUE) {
    
    echo "1";    
  }

  $conn->close();


?>