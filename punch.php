<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="GBK">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php
   include 'conn.php';
   $id = $_GET['id'];
   $name = $_GET['name'];
   $sql = "INSERT INTO punch (eid, `name`, ptime) VALUES ('$id', '$name',now())";
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>

</body>
</html>
