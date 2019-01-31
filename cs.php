<?php
header('Content-type:text/html; Charset=utf8'); 
header( "Access-Control-Allow-Origin:*"); 
header('Access-Control-Allow-Methods:POST');   
header('Access-Control-Allow-Headers:x-requested-with,content-type');
$name=$_POST['username'];
$pwd=$_POST['password'];
$con = mysqli_connect('bdm25683025.my3w.com','bdm25683025','3315315xx','bdm25683025_db');//链接数据库
//mysql_set_charset($link,'utf8'); //设定字符集
 
if(!$con){ 
    die('error:'.mysql_error()); 
}
 
$sql_select="select name,password from user where username= ?"; //从数据库查询信息
$stmt=mysqli_prepare($con,$sql_select);
 mysqli_stmt_bind_param($stmt,'s',$name);
 mysqli_stmt_execute($stmt);
 $result=mysqli_stmt_get_result($stmt);
 $row=mysqli_fetch_assoc($result);
    if($row){ 
        if($row['password']==$pwd){  
                echo 1;//普通用户  
        }else{ 
            echo 3;//密码错误 
        } 
    }else{ 
        echo 4;//用户不存在 
    } 
 
 ?>