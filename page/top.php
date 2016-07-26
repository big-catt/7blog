<?php 
session_start();
include_once './conn/db_config.php';
include_once './common/common.php';
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

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="./page/style/style.css">
    <link rel="stylesheet" type="text/css" href="./page/style/responsive-nav.css">
    <link rel="stylesheet" type="text/css" href="./page/style/bootstrap/css/bootstrap.min.css">
    <link href="./page/style/bootstrap/css/signin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./page/style/bootstrap/css/bootstrapValidator.css">
    <script type="text/javascript" src="./page/style/js/responsive-nav.js"></script>
  </head>
  <body>
<div id="nav">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Projects</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</div>
<!-- 将下面这段代码放置在 </body> 之前 -->
<script>
var navigation = responsiveNav("#nav", { // Selector: The ID of the wrapper
	  animate: true, // Boolean: 是否启动CSS过渡效果（transitions）， true 或 false
	  transition: 400, // Integer: 过渡效果的执行速度，以毫秒（millisecond）为单位
	  label: "Menu", // String: Label for the navigation toggle
	  insert: "after", // String: Insert the toggle before or after the navigation
	  customToggle: "", // Selector: Specify the ID of a custom toggle
	  openPos: "relative", // String: Position of the opened nav, relative or static
	  jsClass: "js", // String: 'JS enabled' class which is added to <html> el
	  debug: false, // Boolean: Log debug messages to console, true 或 false
	  init: function(){}, // Function: Init callback
	  open: function(){}, // Function: Open callback
	  close: function(){} // Function: Close callback
	});
</script>