<?php

 $con = mysqli_connect("localhost", "root", "root", "app");

if(mysqli_connect_errno($con))
{
   echo"Failed to connect: " . mysql_connect_error();
}


mysqli_set_charset($con,"utf8");

$res = mysqli_query($con,"select * from emergency");

$result = array();

while($row = mysqli_fetch_array($res)){

array_push($result,array('id'=>$row[0],'name'=>$row[1], 'region'=>$row[2], 'address'=>$row[3], 'phone'=>$row[4]));


}



echo json_encode(array("result"=>$result),JSON_UNESCAPED_UNICODE);



mysqli_close($con);




?>

<!-- db의 내용을 json으로 변환해 앱으로 전송 (응급시설) -->
