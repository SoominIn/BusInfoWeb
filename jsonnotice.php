<?php

 $con = mysqli_connect("localhost", "root", "root", "app");

if(mysqli_connect_errno($con))
{
   echo"Failed to connect: " . mysql_connect_error();
}


mysqli_set_charset($con,"utf8");

$res = mysqli_query($con,"select number,title,content,id,date from notice");

$result = array();

while($row = mysqli_fetch_array($res)){

array_push($result,array('number'=>$row[0],
                          'title'=>$row[1],
                          'content'=>$row[2], 
                          'id'=>$row[3], 
                          'date'=>$row[4]));


}











echo json_encode(array("result"=>$result),JSON_UNESCAPED_UNICODE);



mysqli_close($con);




?>

<!-- db의 내용을 json으로 변환해 앱으로 전송 (공지사항)-->