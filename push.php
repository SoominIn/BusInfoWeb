
<?php
                      
                $connect = mysqli_connect('localhost', 'root', 'root', 'app');

                session_start();
                $query = "select title from notice ORDER BY number DESC limit 1";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);


              echo $rows['title']
 ?>
<!-- FCM서비스를 이용해 앱으로 푸시알림 전송 -->