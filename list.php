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
    $pday = date("Y-m-d");
    $sql = "SELECT id,name,ptime FROM punch order by ptime desc";
    $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        if ($pday != substr($row["ptime"],0,10)) {
          echo "<hr>";
          // echo $pday;
          // echo substr($row["ptime"],0,10);
        }
        echo $row["name"]."  ". $row["ptime"] . "<br>";
        $pday = substr($row["ptime"],0,10);
      }
      }
    $conn->close();
  ?>


</body>
</html>
