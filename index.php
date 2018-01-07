<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="GBK">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script type="text/javascript">
 function a(){
   var audio = document.getElementById('music');
   if(audio.paused){
       audio.play();//audio.play();// 播放
   }
   else{
        audio.pause();// 暂停
   }
 }
 $('html').one('touchstart',function(){
    audio.play()
})
 function delayURL(url,time){
 setTimeout("top.location.href = '" + url + "'",time);
 }
</script>
  <title>Document</title>
</head>
<audio src="sound/1.wav" controls="controls" id="music" hidden></audio>
<body>
  <?php
    include 'conn.php';
    echo "现在时间是 " . date("Y-m-d H:i:s") . "<br>";
    $sql = "SELECT id,name FROM event";
    $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "<button id='a' onclick='a();delayURL(\"punch.php?id=". $row["id"]. "&name=". $row["name"]."\",160);'>" . $row["name"]. "</button><br><br>";
      }
      }
    $conn->close();
  ?>
   <!-- <button id="a" onclick="a();">播放/暂停</button> -->

</body>
</html>
