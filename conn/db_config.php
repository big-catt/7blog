<?PHP
//数据库连接文件
$dbhost = "localhost";
$dbuser = "root";
$dbpwd = "root";
$dbname = "blog";
$conn = mysql_connect($dbhost,$dbuser,$dbpwd);
//验证数据库是否连接成功
//if($conn){
//	echo "success";
//	}else {
//	echo "fail".mysql_error(); 	
//	}


mysql_select_db($dbname,$conn);
mysql_query("set names utf-8");
