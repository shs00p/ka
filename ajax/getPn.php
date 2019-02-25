<?php
header('Content-type:text/html; Charset=utf8');
header( "Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
include '../conn.php';


$srr = array();
$sql = "SELECT a.name,IFNULL(b.cid,0) cc from event a LEFT JOIN (SELECT pid,name,COUNT(id) cid from event where pid <> 0 GROUP BY pid) b on a.id = b.pid where a.pid = 0";
  $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
        
        array_push($srr,$row);
    }
    //print_r($srr);
    $sjrr = json_encode($srr);
    echo $sjrr;
$conn->close();

?>