<?php
    session_start();
    include('condb.php');

    $user=$_POST['username'];
    $pass=$_POST['password'];

    $member="SELECT*FROM member WHERE username='$user' AND password='$pass'";
    $result_m=mysqli_query($conn, $member);
    $count_m=mysqli_num_rows($result_m);
    $row_m=mysqli_fetch_assoc($result_m);
    if($count_m>0){

        $_SESSION['check_log_1']=$row_m['username'];
        // $_SESSION['check_log_2']=$row_m['password'];
        // $_SESSION['check_log_3']=$row_m['status'];

        // if($row_m['status']=="1"){
        //     echo "<script>";
        //     echo "alert('ยินดีต้อนรับ admin เข้าสู่ระบบ');";
        //     echo "window.location.href='admin/'";
        //     echo "</script>";             
        // }else{
        //     echo "<script>";
        //     echo "alert('ยินดีต้อนรับ user เข้าสู่ระบบ');";
        //     echo "window.location.href='user/'";
        //     echo "</script>";               
        // }


        echo "<script>";
        echo "window.location.href='home.php'";
        echo "</script>";       
    }else{
        echo "<script>";
        echo "alert('ไม่มี username/password อยู่ในระบบ');";
        echo "window.location.href='index.php'";
         echo "</script>";             
    }

?>