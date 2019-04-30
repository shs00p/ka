<?php
header('Content-type:text/html; Charset=utf8');
header( "Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
include '../conn.php';

  $srr = array();
  $sql = "select id,name,tid,from_unixtime(pime,'%m-%d %H:%i') pime,from_unixtime(sime,'%m-%d %H:%i') sime,from_unixtime(eime,'%H:%i') eime,lime,num,remarks from punch where state = 1 ORDER BY id desc";
    $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {        
          array_push($srr,$row);
      }  
      //print_r($srr);
      $sjrr = json_encode($srr);
      echo $sjrr;
      $conn->close();

?>