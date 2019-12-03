<!DOCTYPE>
<html>
<link rel="stylesheet" href="./exx111.css">
<style>
a { text-decoration:none }
div { text-align: center; }
.bgimg {
    font-size:45px;
    font-weight: bolder;
    border: 0;
    padding: 0;
    opacity: 0.8;
  filter: alpha(opacity=50); /* For IE8 and earlier */
    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/225363/ales-krivec-38565-unsplash.jpg);
    //background-image: url('aaaa.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>

<div id="header">
<br>
<div>
 <a href="index.html"><img src="bus1671.png" />
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
<br><br><br><br><br>
Add BusMemo
</div>
<br></br><br></br>
  <body>
   <div id="section2">
    <h1>Add BusMemo</h1>
    <br></br>
    <?php
      $bus_number = $_POST[ 'bus_number' ];
       $bus_region = $_POST[ 'bus_region' ];
      //$low_floor = $_POST[ 'low_floor' ];
      //$st_name = $_POST[ 'st_name' ];
      $memo = $_POST[ 'memo' ];
      //$user = $_POST[ 'user' ];

      if ( is_null( $bus_number ) ) {
        echo '<h1>Fail! Input Bus Number</h1>';
      } else {
        $jb_conn = mysqli_connect("localhost", "root", "root", "app");
        $jb_sql = "INSERT INTO bus ( bus_number,bus_region, memo, user ) VALUES ( '$bus_number',$bus_region,'$memo' , 1);";
        mysqli_query( $jb_conn, $jb_sql );
        echo '<h1>Success!</h1>';
       
      }
    ?>
    <br></br>
    <br></br>
       <a href="bussearch.html">Search Bus Number!</a>
   </div>
    
   <br></br>         
    <div id="footer">
      <hr>
      <h4 style = " text-align: center">Adress : 경기도 수원시 장안구 송원로 24번길 17 송죽동 380-10 1층 (16307)</h4>
      <h4 style = " text-align: center">Tel : 031)253-7723&nbsp; Fax : 031)246-7721 &nbsp;평일 09:00 ~ 18:00 점심 12:00~13:00
      <h4 style = " text-align: right">copyrightⓒEunjung. All Rights reserved</h4>
    </div>
  </body>
</html>