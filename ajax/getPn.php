<?php
header('Content-type:text/html; Charset=utf8');
header( "Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
include '../conn.php';


$srr = array();
$sql = "select a.id,a.name,a.aid,IFNULL(b.bid,0) bid from (SELECT a.id,a.name,IFNULL(b.cid,0) aid from event a LEFT JOIN (SELECT pid,name,COUNT(id) cid from event where pid <> 0 GROUP BY pid) b on a.id = b.pid where a.pid = 0) a left JOIN (SELECT COUNT(id) bid,name,pid from punch GROUP BY pid) b on a.id = b.pid order by id";
  $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {        
        array_push($srr,$row);
    }
$sql = "select @n:='未完成' name,@i:='0' id,count(id) aid from punch where sime <> '' and isnull(eime)";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {        
      array_push($srr,$row);
  }
    //print_r($srr);
    $sjrr = json_encode($srr);
    echo $sjrr;
$conn->close();

?>