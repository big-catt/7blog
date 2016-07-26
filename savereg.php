<?php 
session_start();
include_once 'common/common.php';
if(isset($_SESSION['userword'])){
    echo "<script>alert('you cant both login use admin and user!');window.location.href='http://localhost/7blog/';</script>; ";
    }else{
        include_once 'conn/db_config.php';
        $usernc = $_POST['usernc'];
        $sql = mysql_query("select usernc from tb_user where usernc = '".$usernc."'",$conn);
        $info = mysql_fetch_array($sql);
        if($info){
            echo "<script >alert('sorry,you username has been used!');history.back();</script>";
            exit;
            
        }
        $ip = $_SERVER["REMOTE_ADDR"];
        if (mysql_query("insert into tb_user(usernc,userpwd,truename,email,qq,tel,ip,address,face,regtime,sex,usertype)
            values('".$usernc."','".md5(trim($_POST["userpwd"]))."','".$_POST["truename"]."','".$_POST["email"]."',
            '".$_POST["qq"]."','".$_POST["tel"]."','".$ip."','".$_POST["address"]."','".$_POST["face"]."',
            '".date("Y-m-d H:i:s")."','".$_POST["sex"]."','0')",$conn)){
            $_SESSION["nuc"] = $usernc;
            echo "<script >alert('reg success!');window.location.href='http://localhost/7blog/';</script>";
        }else {
            echo "<script >alert('reg fail！');history.back();</script>";
        }
    }


?>