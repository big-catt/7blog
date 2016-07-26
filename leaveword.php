<?php 
//include_once 'top.php';

//if(isset($_SESSION['unc']) or isset($_SESSION['userword'])){

?>
<form name="form1" method="post" action="saveleaveword.php">
 <div class="form-group">
                    请输入主题<input  name="title" />
                    
</div>

<!-- 加载编辑器的容器 -->
    <textarea id="mycontainer" name="content" type="text/plain">
          
    </textarea>
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary">发表</button>
                    </div>
                </div>
    </form>
    
 <!-- 配置文件 -->
    <script type="text/javascript" src="./ue/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="./ue/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('mycontainer');
    </script>




<?php 
//}else {
//    echo "<script>alert('please login after leave word!');history.back();</script>";
//}

//include_once 'bottom.php';
?>