<?php
if(!isset($_SESSION)){
session_start();
}
if(isset($_SESSION['usernc'])){
    unset($_SESSION['usernc']);
    echo "<script>alert('注销成功！');window.location.href='index.php';</script>";
}else{
    echo "<script>alert('您尚未登录！');window.location.href='login.php';</script>";
}

?>