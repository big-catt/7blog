<?php 
session_start();
include 'common/common.php';
include 'conn/db_config.php';
if(isset($_SESSION['usernc'])){
    $sql = mysql_query("select id from tb_user where usernc='".$_SESSION['usernc']."'",$conn);
    $info = mysql_fetch_array($sql);//索引数组
  //  print_r($info);
    $userid = $info['id'];
}
if(isset($_SESSION['userword'])){
    $sql = mysql_query("select id from tb_admin where useword='".$_POST['userword']."'",$conn);
    $info = mysql_fetch_array($sql);
    $userid = $info['id'];
}
if (isset($_POST['content'])){
    if(is_file("filterwords.txt")){
        $file_word = file("filterwords.txt");
        $content = $_POST['content'];
        //print_r($content);
        $title = $_POST['title'];
       // print_r($title);
        for ($i = 0;$i<count($file_word);$i++){
            if(preg_match("/".trim($file_word[$i])."/i",$content)){
                echo "<script>alert('content error!');history.back(-1);</script>";
                exit;
            }
        }
    }
    $createtime = date("Y-m-d H:i:s");
    if(mysql_query("insert into tb_leaveword(userid,createtime,title,content) values('$userid','$createtime','$title','$content')")){
        echo "success";
    }else{
        echo "f";
    }
}
?>