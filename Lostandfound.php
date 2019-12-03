<!DOCTYPE>
<link rel="stylesheet" href="./exx111.css">
<style>
a { text-decoration:none }
div { text-align: center; }
</style>
<html>
<div id="header">
<br>
<div>
 <a href="index.html"><img src="bus1671.png" aligan="center" />
</div>
  <nav>
  <br>
  <a href="bussearchwhat.html">Search Bus</a>
  <a href="busmemo_insert.html">Add BusMemo</a>
  <a href="EmergencyFacility.html">Emergency Facility</a>
  <div id="indicator"></div>
  </nav>
  </div>
<head>
        <meta charset = 'utf-8'>
</head>

   
   <body>
     <div id="section2">
     <?php
                $connect = mysqli_connect("localhost", "root", "root", "app") or die("fail");
                
                $id = $_GET[name];                      //Writer
                $pw = $_GET[pw];                        //Password
                $title = $_GET[title];                  //Title
                $content = $_GET[content];              //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = 'Lost_AndFound.html';                   //return URL
 
 
                $query = "insert into lost (number,title, content, date, hit, id, password) 
                        values(null,'$title', '$content', '$date',0, '$id', '$pw')";
 
 
                $result = $connect->query($query);
                if($result){
     ?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>

    </div>
     <h6 style=" text-align: right"><a href="#" class="scrollup" ><img src="top.PNG"  alt="페이지 상단으로 이동 " />'</a></h6>        
    <div id="footer">
      <hr>
      <h4 style = " text-align: center">Adress : 경기도 수원시 장안구 송원로 24번길 17 송죽동 380-10 1층 (16307)</h4>
      <h4 style = " text-align: center">Tel : 031)253-7723&nbsp; Fax : 031)246-7721 &nbsp;평일 09:00 ~ 18:00 점심 12:00~13:00
      <h4 style = " text-align: right">copyrightⓒEunjung. All Rights reserved</h4>
    </div>
</body>

</html>