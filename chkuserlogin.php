<?php 
session_start();
if(isset($_SESSION['userword'])){
    echo "<script>alert('cant login with the same machin!');window.location.href='index.php';</script>";
}else{
    include_once 'conn/db_config.php';
    if(isset($_POST['usernc']) && isset($_POST['userpwd'])){
        $sql =  mysql_query("select usertype from tb_user where usernc = '".$_POST['usernc']."' and userpwd = '".md5(trim($_POST['userpwd']))."'",$conn);
        $info = mysql_num_rows($sql);
        //print_r($info);
        if($info==1){
            $_SESSION['usernc'] = $_POST['usernc'];
            echo "<script>alert('login success!');window.location.href='index.php';</script>";
        }else{
            echo "<script>alert('login fail!');history.back();</script>";
        }
    }
}
?>