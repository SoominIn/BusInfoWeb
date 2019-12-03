<?php

    header("Content-Type: text/html;charset=UTF-8");

    $conn = mysqli_connect("localhost","root","root","app");

    $data_stream = "'".$_POST['bus_number']."','".$_POST['bus_region']."','".$_POST['st_name']."'";

    $query = "insert into busstation(bus_number,bus_region,st_name) values (".$data_stream.")";

    $result = mysqli_query($conn, $query);

     

    if($result)

      echo "1";

    else

      echo "-1";

     

    mysqli_close($conn);

?>


<!-- 앱에서 받은 공공API 저장(정류장 정보) -->