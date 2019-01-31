<?php
include 'conn.php';
$name=$_POST['username'];
$pwd=$_POST['password'];

$sql = "SELECT name,password FROM user where name = $name ";
    $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          if ($row['password'] == $pwd) {
            echo "1";//登陆正确
          }
          else {
            echo "2";//密码错误
          }        
      }
      }
      else {
          echo "3";//不存在用户
      }
    $conn->close();

?>