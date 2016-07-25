<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">
    <title>注册</title>
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
            <!-- class都是bootstrap定义好的样式，验证是根据input中的name值 -->
            <form name="form1" id="defaultForm" method="post" class="form-horizontal" action="savereg.php">
                <!-- 下面这个div必须要有，插件根据这个进行添加提示 -->
                <div class="form-group">
                    <label class="col-lg-3 control-label">用户名</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="usernc" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Email</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" id="auto-complete-email" name="email" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">密码</label>
                    <div class="col-lg-5">
                        <input type="password" class="form-control" name="userpwd" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">确认密码</label>
                    <div class="col-lg-5">
                        <input type="password" class="form-control" name="userpwd1" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">真实姓名</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="truename" />
                    </div>
                </div>
                <div class="form-group">
                <label for="sex" class="col-lg-3 control-label">性别</label>
                 <div class="col-lg-5">
                <select name="sex">
        	       <option value="">请选择</option>
        	       <option value>男</option>
 			        <option value>女</option>
                </select>
                </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">联系电话</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="tel" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">QQ号码</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="qq" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">联系地址</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="address" />
                    </div>
                </div>
                 <div class="form-group">
                <label for="face">头像选择</label> 
                 <div class="col-lg-5">       
                  <select name="face" onchange="form1.user_face.src=this.value">
                      <?php
					  for($i=0;$i<=11;$i++){		//循环输出复选框的头像
					  ?>
					   <option value="<?php echo "../images/face/".$i.".gif"?>"><?php echo $i.".gif"?></option>
					  <?php
					  }
					  ?>
                  </select>
                   <img id=user_face src="../images/face/3.gif">
                  </div>
                   
                  </div>                 
                
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary">注册</button>
                    </div>
                </div>
            </form>

</div>
<script type="text/javascript">
$("#auto-complete-email").completer({
	  separator: "@",
	  source: ["qq.com","gmail.com", "yahoo.com", "hotmail.com", "outlook.com", "live.com", "aol.com", "mail.com","163.com"]
	});
</script>
<script type="text/javascript">
$(document).ready(function() {
    /**
     * 下面是进行插件初始化
     * 你只需传入相应的键值对
     * */
    $('#defaultForm').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {/*输入框不同状态，显示图片的样式*/
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {/*验证*/
                usernc: {/*键名username和input name值对应*/
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {/*非空提示*/
                            message: '用户名不能为空'
                        },
                        regexp: {/* 只需加此键值对，包含正则表达式，和提示 */
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: '只能是数字和字母_.'
                        },
                        stringLength: {/*长度提示*/
                            min: 6,
                            max: 30,
                            message: '用户名长度必须在6到30之间'
                        }/*最后一个没有逗号*/
                    }
                },
                userpwd: {
                    message:'密码无效',
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '确认密码长度必须在6到30之间'
                        },                   
                        different: {//不能和用户名相同
                            field: 'usernc',//需要进行比较的input name值
                            message: '不能和用户名相同'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                userpwd1: {
                    message:'确认密码无效',
                    validators: {
                        notEmpty: {
                            message: '确认密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '确认密码必须在6到30之间'
                        },
                        identical: {//相同
                            field: 'userpwd',
                            message: '两次密码不一致'
                        },
                        different: {//不能和用户名相同
                            field: 'usernc',
                            message: '不能和用户名相同'
                        },
                        regexp: {//匹配规则
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                truename: {
                    message:'真实姓名无效',
                    validators: {
                        notEmpty: {
                            message: '真实姓名不能为空'
                        },
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: '邮件地址不能为空'
                        },
                        emailAddress: {
                            message: '不是一个合法邮件地址'
                        },
                        regexp: {//匹配规则
                            regexp:  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ,
                            message: '不是一个合法邮件地址'
                        }
                    }
                },
                tel: {
                    message: 'The tel is not valid',
                    validators: {
                        notEmpty: {
                            message: '手机号码不能为空'
                        },
                        stringLength: {
                            min: 11,
                            max: 11,
                            message: '请输入11位手机号码'
                        },
                        regexp: {
                            regexp: /^1[3|5|8]{1}[0-9]{9}$/,
                            message: '请输入正确的手机号码'
                        }
                    }
                },
            }
        });
});
</script>
</body>
</html>