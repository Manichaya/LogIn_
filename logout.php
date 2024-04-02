<?php
    session_start();
    session_destroy();
    echo "<script>";
    echo "alert('ขอบคุณที่เข้ามาใช้งาน');";
    echo "window.location.href='index.php'";
    echo "</script>";    
?>