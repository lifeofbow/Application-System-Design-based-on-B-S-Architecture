<?php
//  防止全局变量造成安全隐患
$admin = false;
//  启动会话，这步必不可少
session_start();
//  判断是否登陆
if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true) {
} 
else {
    //  验证失败，将 $_SESSION["admin"] 置为 false
    $_SESSION["admin"] = false;
    die("you have to login");
    unset($_SESSION['admin']);
	//  这种方法是销毁整个 Session 文件
	session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap的HTML标准模板</title>   
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--你自己的样式文件 -->
        <link href="css/your-style.css" rel="stylesheet">        
        <!-- 以下两个插件用于在IE8以及以下版本浏览器支持HTML5元素和媒体查询，如果不需要用可以移除 -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
        	#welcome{
        		float:right;
        		margin-top:10px;
        		margin-right:20px;
        	}
        </style>
    </head>
    <body>
    	<ul class="nav nav-tabs" role="tablist">
    		<li class="active"><a href="#home" role="tab" data-toggle="tab">首页</a></li>
    		<li><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
    		<li><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
    		<li><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
    		<li id="welcome">
    			<?php echo "welcome"." ".$_SESSION["user"]."!"; ?>
    		</li>
    	</ul>

    	<div class="tab-content">
    		<div class="tab-pane active" id="home">
    			
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    		</div>

    		<div class="tab-pane" id="profile">
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    		</div>

    		<div class="tab-pane" id="messages">
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    		</div>

    		<div class="tab-pane" id="settings">
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    			<P>asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdkasdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk asdakgdaksd askd aksdjalsdhaa dalsdhas dhaksd gasdg alsdk</P>
    		</div>
    	</div>

    	<script>
    		$(function () {
    			$('#myTab a:last').tab('show');
    		})
    	</script>


    	<!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
        <script src="jquery/jquery-1.12.2.min.js"></script>
        <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
        <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> 
    </body>
</html>

<?php
unset($_SESSION['admin']);
//  这种方法是销毁整个 Session 文件
session_destroy();
?>
