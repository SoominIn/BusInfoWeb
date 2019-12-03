<!DOCTYPE>
<html>
<link rel="stylesheet" href="./exx111.css">
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
    //background-image: url('aaaa.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
  div { text-align: center; }

  table { text-align: center; }
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
        .even{
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
 <br><br>
 <img src="/image/search.PNG"/><br>
 Search Bus
 <br><br>   
&emsp;&ensp;
 <img src="/image/busroute.PNG"/>    
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
 <img src="/image/busstation.PNG"/>
 &emsp;&emsp;
 <br>
 <div class="button" style="vertical-align:middle"><spann><a href="bussearch.html">Search Bus Number </a></spann></div>
 &emsp;&emsp;&emsp;
 <div class="button" style="vertical-align:middle"><spann><a href="Lost_AndFound.html">Search Staion Name </a></spann></div>
</div>
<br></br><br></br>
  <body>
 <body>
   <div id="section1">

    <br></br>	

     <h1><th>Bus Service Route</th></h1>
      <?php
       $bus_number = $_POST[ 'bus_number' ];
       $bus_region = $_POST[ 'bus_region' ];
       $jb_conn = mysqli_connect( 'localhost', 'root', 'root', 'app' );
       $jb_sql = "SELECT  * FROM bus WHERE bus_number = '$bus_number'and bus_region = '$bus_region' ";
       $jb_result = mysqli_query( $jb_conn, $jb_sql );
       $total = mysqli_num_rows($jb_result);
      ?>

        <h2 align=center></h2>
        <table align = center>
        <thead align = "center">
        <tr>  
        <td width = "300" align = "center">station name</td>
        </tr>
        </thead>
 
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($jb_result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                
                <td width = "300" align = "center"><?php echo $rows['st_name']?></td>
                </tr>
        <?php
                $total--;
                }
        ?>
     </tbody>
    </table>

    <h1><th>Bus Memo</th></h1>
     <?php
       $bus_number = $_POST[ 'bus_number' ];
       $bus_region = $_POST[ 'bus_region' ];
     
       $jb_conn = mysqli_connect( 'localhost', 'root', 'root', 'app' );
       $jb_sql = "SELECT distinct memo FROM bus WHERE bus_number = '$bus_number' and user = 1  and bus_region = '$bus_region'";
       $jb_result = mysqli_query( $jb_conn, $jb_sql );
       $total = mysqli_num_rows($jb_result);
     ?>

     <h2 align=center></h2>
     <table align = center>
     <thead align = "center">     
     <tr>  
     <td width = "300" align = "center">memo</td>
     </tr>
     </thead>
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($jb_result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                
                <td width = "300" align = "center"><?php echo $rows['memo']?></td>
                </tr>
        <?php
                $total--;
                }
        ?>
     </tbody>
    </table>
	
   </div>
   <h6 style=" text-align: right"><a href="#" class="scrollup" ><img src="/image/top.PNG"  alt="페이지 상단으로 이동 " />'</a></h6> 

   </div>     
        <div id="footer">
            <h4 style = " text-align: center">Adress : 경기도 수원시 장안구 송원로 24번길 17 송죽동 380-10 1층 (16307)</h4>
            <h4 style = " text-align: center">Tel : 031)253-7723&nbsp; Fax : 031)246-7721 &nbsp;평일 09:00 ~ 18:00 점심 12:00~13:00
            <h4 style = " text-align: right">copyrightⓒEunjung. All Rights reserved</h4>
        </div> 
  </body>
</html>