<?php

    header("Content-Type: text/html;charset=UTF-8");

    $conn = mysqli_connect("localhost","root","root","app");

    $data_stream = "'".$_POST['st_name']."','".$_POST['bus_region']."'";

    $query = "insert into recentstation(st_name,bus_region) values (".$data_stream.")";

    $result = mysqli_query($conn, $query);

     

    if($result)

      echo "1";

    else

      echo "-1";

     

    mysqli_close($conn);

?>


<!-- 앱에서 받은 최근검색어 저장(정류장) -->