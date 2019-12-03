<!DOCTYPE>
<link rel="stylesheet" href="./exx.css">
<style>
a { text-decoration:none }
.bgimg {
    font-size:45px;
    font-weight: bolder;
    border: 0;
    padding: 0;
opacity: 0.8;
  filter: alpha(opacity=50); /* For IE8 and earlier */
    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/225363/ales-krivec-38565-unsplash.jpg);
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
div { text-align: center; }

.view_table {
border: 1px solid #444444;
margin-top: 30px;
}
.view_title {
height: 30px;
text-align: center;
background-color: #cccccc;
color: white;
width: 1000px;
}
.view_id {
text-align: center;
background-color: #EEEEEE;
width: 30px;
}
.view_id2 {
background-color: white;
width: 60px;
}
.view_hit {
background-color: #EEEEEE;
width: 30px;
text-align: center;
}
.view_hit2 {
background-color: white;
width: 60px;
}
.view_content {
padding-top: 20px;
border-top: 1px solid #444444;
height: 500px;
}
.view_btn {
width: 700px;
height: 200px;
text-align: center;
margin: auto;
margin-top: 50px;
}
.view_btn1 {
height: 50px;
width: 100px;
font-size: 20px;
text-align: center;
background-color: white;
border: 2px solid black;
border-radius: 10px;
}
.view_comment_input {
width: 700px;
height: 500px;
text-align: center;
margin: auto;
}
.view_text3 {
font-weight: bold;
float: left;
margin-left: 20px;
}
.view_com_id {
width: 100px;
}
.view_comment {
width: 500px;
}

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
<div class="bgimg">
<br><br><br><br>
<img src="main_button_03.PNG"/><br>
Lost-And-Found
</div>
 <div id="section3">
   <br><br>
   <h2 align=center>분실물 신고</h2>
<?php
                $connect = mysqli_connect('localhost', 'root', 'root', 'app');
                $number = $_GET['number'];
                session_start();
                $query = "select title, content, date, hit, id from lost where number =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
 
        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['id']?></td>

        </tr>
 
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
        </tr>
        </table>
 
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='Lost_AndFound.html'">목록으로</button>

        </div>

</div>
</body>
     <h6 style=" text-align: right"><a href="#" class="scrollup" ><img src="/image/top.PNG"  alt="페이지 상단으로 이동 " />'</a></h6>        
    <div id="footer">
      <hr>
      <h4 style = " text-align: center">Adress : 경기도 수원시 장안구 송원로 24번길 17 송죽동 380-10 1층 (16307)</h4>
      <h4 style = " text-align: center">Tel : 031)253-7723&nbsp; Fax : 031)246-7721 &nbsp;평일 09:00 ~ 18:00 점심 12:00~13:00
      <h4 style = " text-align: right">copyrightⓒEunjung. All Rights reserved</h4>
    </div>


</html>