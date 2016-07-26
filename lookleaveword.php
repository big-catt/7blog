<?php 
if(isset($_SESSION['usernc'])){
    $user = $_SESSION['usernc'];
}else {
    $user = "";
}
if (isset($_SESSION['userword'])){
    $admin = $_SESSION['userword'];
}else{
    $admin = "";
}
//分页操作
$sql = mysql_query("select count(*) as total from tb_leaveword",$conn);
$infos = mysql_fetch_array($sql);
$total = $infos['total'];
//print_r($total);
if($total==0){
    echo "<div align=center>对不起，暂无留言！</div>";
}else{
    if(!isset($_GET["page"]) || !is_numeric($_GET["page"])){
        $page =1;
    }else{
        $page = intval($_GET['page']);
    }
}
$pagesize = 3;
if($total%$pagesize==0){
    $pagecount = intval($total/$pagesize);
}else{
    $pagecount = ceil($total/$pagesize);
}
$sql = mysql_query("select * from tb_leaveword order by createtime desc limit".($page-1)*$pagesize.",$pagesize ",$conn);
//$result = mysql_fetch_array($sql) or die(mysql_error());;
//print_r($result);
while ($info = mysql_fetch_array($sql)){
   $mysql1 = mysql_query("select usernc,face,ip,email,qq from tb_user where id='".$row['userid']."'",$conn);
   $info1 = mysql_fetch_array($mysql1);
  // print_r($row1);
}
?>
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FCD424">
  <tr>
   