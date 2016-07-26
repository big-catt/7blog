<?php
session_start();		//启用session支持
include("conn/db_config.php");		//包含数据库文件
include_once("common/common.php");		//包含系统功能文件
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">
    <title></title>
     <link rel="stylesheet" type="text/css" href="./style/style.css">
     <link rel="stylesheet" type="text/css" href="./style/bootstrap/css/bootstrap.min.css">
    <link href="./style/bootstrap/css/signin.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="./style/bootstrap/css/bootstrapValidator.css">
      <link rel="stylesheet" type="text/css" href="./style/completer.css">
      <script src="./style/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./style/bootstrap/js/bootstrap.min.js"></script>
    <script src="./style/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    <script src="./style/bootstrap/js/ie-emulation-modes-warning.js"></script>
    <script src="style/bootstrap/js/bootstrapValidator.js"></script>
    <script src="./style/js/completer.js"></script>
  </head>
  <body>
<div class="container">
<div class="user_top">
<?php
		 if(isset($_SESSION["usernc"]) && $_SESSION["usernc"]!=""){
		    echo "欢迎您登录：".$_SESSION["usernc"];
		 }
		?>
	<?php
		 if(isset($_SESSION["userword"]) && $_SESSION["userword"]!=""){
		    echo "管理员在线：".$_SESSION["userword"];
		 }
		?>
</div>
<div align="right">

今天是：&nbsp;
   <?php echo date("Y-m-d H:i:s");?>
    </div>
	<div class="row">
		<div class="span12">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="index.php?id=<?php echo urlencode("首页");?>">首页</a>
				</li>
				<li >
					<a href="index.php?id=<?php echo urlencode("发表留言");?>">发表留言</a>
				</li>
				<li >
					<a href="index.php?id=<?php echo urlencode("查看留言");?>">查看留言</a>
				</li>
				<li >
					<a href="index.php?id=<?php echo urlencode("查询留言");?>">查询留言</a>
				</li>
				
				<li class="dropdown pull-right">
					 <a href="#" data-toggle="dropdown" class="dropdown-toggle">管理<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php 
		  if(isset($_SESSION['userword'])){
		  	echo "admin_browse.php";
		  }else{
		  ?>
		   index.php?id=<?php echo urlencode("版主管理");?>
		  <?php
		  }
		  ?>">版主管理</a>
						</li>
						<?php
		            if(isset($_SESSION["usernc"]) && $_SESSION["usernc"]!=""){
		             echo "<li><a>".$_SESSION["usernc"]."<li>";
		            }else {
		                ?>
		              <li>
					  <a href="index.php?id=<?php echo urlencode("用户注册");?>">用户注册</a></li>  
		              <li><a href="./login.php">登录</a></li>
		                <?php 
		                }
		                ?>						
						<li>
							<a href="index.php?id=<?php echo urlencode("注销登录");?>">注销登录</a>
						</li>
						<li>
							<a href="#">更多设置</a>
						</li>
						<li class="divider">
						</li>
						
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>