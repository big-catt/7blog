<?php
include_once 'top.php';
?>

   <div class="container">

      <form name="form1" id="form1" class="form-signin" method="post" action="savereg.php" onSubmit="return chkinput(this)">
        <h2 class="form-signin-heading">请注册</h2>
        <div class="form-group">
        <label for="inputUsername" class="sr-only">用户昵称</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="用户名" name="usernc" required="" autofocus="">  
        </div>      
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="userpwd" required="">
        <label for="inputPassword" class="sr-only">确认密码</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="userpwd1" required="">
        <label for="truename" class="sr-only">真实姓名</label>
        <input type="text" id="truename" class="form-control" placeholder="truename" name="truename" required="">
        <label for="sex" class="sr-only">性别</label>
        <select name="sex">
        	<option value="">请选择</option>
        	<option value>男</option>
 			<option value>女</option>
        </select>
        <label for="inputEmail" class="sr-only">Email地址</label>        
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="" autofocus="">
        <label for="tel" class="sr-only">联系电话</label>        
        <input type="text" id="inputTel" class="form-control" placeholder="tel" name="tel" required="" autofocus="">
        <label for="qq" class="sr-only">QQ号码</label>        
        <input type="text" id="qq" class="form-control" placeholder="qq" name="qq" required="" autofocus="">
        <label for="face">头像选择</label>        
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
        <label for="adress" class="sr-only">联系地址</label>
         <input type="text" id="address" class="form-control" placeholder="address" name="address" required="" autofocus="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
      </form>
<!--<script>
		function chkinput(form){
			if(form.userpwd.value!=form.userpwd1.value){
				alert("密码与确认密码不同");
				form.userpwd1.focus();
				return(false);
				}
			return(true);
			}
	
   </script>//-->
<script type="text/javascript">
$(document).ready(function() {
    /**
     * 下面是进行插件初始化
     * 你只需传入相应的键值对
     * */
    $('#form1').bootstrapValidator({
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
                        stringLength: {/*长度提示*/
                            min: 6,
                            max: 30,
                            message: '用户名长度必须在6到30之间'
                        }/*最后一个没有逗号*/
                    }
                },
                password: {
                    message:'密码无效',
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '用户名长度必须在6到30之间'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                }
            }
        });
});
</script>
    </div> <!-- /container -->

  <?php 
  include_once 'bottom.php';
  ?>