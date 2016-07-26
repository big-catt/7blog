<<<<<<< HEAD
<?php 
include_once 'top.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id="首页";
}
=======
<?php
//加载头部文件
include_once './page/top.php';

>>>>>>> origin/master
?>
<!-- 面包屑导航 -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li>
					<a href="#">主页</a> <span class="divider"></span>
				</li>
				<li>
					<a href="#"><?php 
	if(isset($_GET['id']) && $_GET['id']=="详细信息"){
	?>
	<a href="index.php?l_id=<?php echo $_GET["l_id"];?> &id=<?php echo urlencode($id);?>" class="a1"><?php echo $id;?></a>
	<?php
	
	}else{
	?>
		<?php echo $id;?>
	<?php 
	}
	?></a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="span6" style="width: 30%;float:left">
		
		</div>
		<div class="span6">
		<?php 

switch ($id) {
    case "首页":
        include 'main.php';
        break;
    case "用户注册":
        include 'reg.php';
        break;
    case "发表留言":
        include 'leaveword.php';
        break;
    case "查看留言":
        include 'lookleaveword.php';
        break;
    case "查询留言":
        include 'searchleaveword.php';
        break;
    case "版主管理":
        include 'login.php';
        break;
    case "注销登录":
        include 'logout.php';
        break;
    case "编辑留言":
        include 'editleaveword.php';
        break;
    case "回复编辑留言":
        include 'editreplyword.php';
        break;
    case "详细信息":
        include 'detail.php';
        break;
    default:
        include 'main.php';
        break;
}

?>
<?php 
include_once 'top.php';
$sql = mysql_query("select * from tb_leaveword order by createtime desc ",$conn);
//$result = mysql_fetch_array($sql) or die(mysql_error());;
//print_r($result);
while ($row = mysql_fetch_array($sql)){
    echo $row['id'].':'.$row['content'];
}
?>
		</div>
	</div>
</div>


<?php 
include_once 'bottom.php';
?>