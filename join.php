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
        table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .even{
                background: #efefef;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        .text:hover{
                text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}

</style>  
<html>
<head>
        <meta charset='utf-8'>
</head>
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
<div class="bgimg">
<br><br><br><br>
<img src="main_button_02.PNG"/><br>
Notice
</div>

<body>
    <div align="center">
    <br><br>
     <span><h1>Join</h1></span>


     <form method='get' action='join_action.php'>
     <p>ID: <input type="text" name="id"></p>
     <p>PW: <input type="password" name="pw"></p>
     <p>Email: <input type="email" name="email"></p>
     <input type="submit" value="회원가입">
     </form>
        
    <h6 style=" text-align: right"><a href="#" class="scrollup" ><img src="/image/top.PNG"  alt="페이지 상단으로 이동 " />'</a></h6>        
    <div id="footer">
      <hr>
      <h4 style = " text-align: center">Adress : 경기도 수원시 장안구 송원로 24번길 17 송죽동 380-10 1층 (16307)</h4>
      <h4 style = " text-align: center">Tel : 031)253-7723&nbsp; Fax : 031)246-7721 &nbsp;평일 09:00 ~ 18:00 점심 12:00~13:00
      <h4 style = " text-align: right">copyrightⓒEunjung. All Rights reserved</h4>
    </div> 
</body>
</html>


