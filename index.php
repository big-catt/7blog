<?php
//加载头部文件
header('content-type:text/html;charset=utf-8');
//include_once './page/top.php';
?>
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="292" background="./images/dh_back.gif"><div align="right">今天是：&nbsp;
   <?php echo date("Y-m-d H:i:s");?>
    </div></td>
    <td width="200" valign="top"></td>
  </tr>
  <tr>
    <td>Row 1: Col 1</td>
    <td>Row 1: Col 2</td>
  </tr>
</table>

<?php 
/*
 *
switch ($id) {
    case "首页":
        include './page/mian.php';
        break;
    case "用户注册":
        include './page/reg.php';
        break;
    case "发表留言":
        include './page/leaveword.php';
        break;
    case "查看留言":
        include './page/lookleaveword.php';
        break;
    case "查询留言":
        include './page/searchleaveword.php';
        break;
    case "版主管理":
        include './page/login.php';
        break;
    case "注销登录":
        include './page/logout.php';
        break;
    case "编辑留言":
        include './page/editleaveword.php';
        break;
    case "回复编辑留言":
        include './page/editreplyword.php';
        break;
    case "详细信息":
        include './page/detail.php';
        break;
    default:
        include './page/main.php';
        break;
}
*/
?>
