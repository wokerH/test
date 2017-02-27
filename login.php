<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>物流系统登录界面</title>
	<style type="text/css">
		body,form,div,input{
			margin: 0;
			padding: 0;
		}
		#login{
			width: 636px;
			height: 372px;
			background: url(images/dl.gif) no-repeat;
			margin: auto;  
  			position: absolute;  
  			top: 0; left: 0; bottom: 0; right: 0;  
		}
		#login form input{
			width: 100px;
			height: 20px;
			position: absolute;
			bottom: 42px;
		}
		#login .username{
			left: 96px;
		}
		#login .password{
			left: 262px;
		}
		#login .submit{
			width: 90px;
			height: 27px;
			border: 0;
			left: 370px;
			bottom: 40px;
			background: url(images/dl_03.gif) no-repeat;
		}
		#login .reset{
			display: inline-block;
			width: 50px;
			height: 27px;
			border: 0;
			left: 460px;
			bottom: 40px;
			background-color: #fff; 
			color: #c30;
			font-size: 14px;
		}
		#login .tips{
			position: absolute;
			width: 270px;
			left: 96px;
			bottom: 20px;
			height: 22px;
		}
		#login .tips span{
			display: inline-block;
			width: 100px;
			height: 20px;
			color: red;
			font-size: 12px;
		}
		#login .tips .usertip{
			float: left;
		}
		#login .tips .pwdtip{
			float: right;
		}
	</style>
</head>
<body>
	<div id="login">
		<form action="login.handle.php" method="post">
			<input class="username" type="text" placeholder="请输入用户名" name="username">
			<input class="password" type="password" placeholder="请输入密码" name="password">
			<input class="submit" type="submit" value="">
			<input class="reset" type="reset" value="[重写]">
		</form>
		<div class="tips">
			<span class="usertip"></span>
			<span class="pwdtip"></span>
		</div>
	</div>
	<!-- JS代码验证部分 -->
 	<script type="text/javascript">
	var aIput = document.getElementsByTagName('input');
	var oUser = aIput[0];
	var oPwd = aIput[1];
	var oSub = aIput[2];
	var oUsertip = document.getElementsByClassName('usertip')[0];
	var oPwdtip = document.getElementsByClassName('pwdtip')[0];
	var oReset = document.getElementsByClassName('reset')[0];

	oSub.onclick = function(){
		if (oUser.value==""&&oPwd.value=="") {
			oUser.style.border = "1px solid red";
			oUsertip.innerHTML = "请输入用户名";
			oPwd.style.border = "1px solid red";
			oPwdtip.innerHTML = "请输入密码";
			return false;
		}
		if(oUser.value==""&&oPwd.value!=""){
			oUser.style.border = "1px solid red";
			oUsertip.innerHTML = "请输入用户名";
			oPwd.style.border = "1px solid #ddd";
			oPwdtip.innerHTML = "";
			return false;
		}
		if(oUser.value!=""&&oPwd.value==""){
			oPwd.style.border = "1px solid red";
			oPwdtip.innerHTML = "请输入密码";
			oUser.style.border = "1px solid #ddd";
			oUsertip.innerHTML = "";
			return false;
		}
		if(oUser.value!=""&&oPwd.value!=""){
			if (oUser.value.match(/^[a-zA-Z\d]\w{3,11}[a-zA-Z\d]$/g)) {
				return true;
			}else{
				oUser.style.border = "1px solid red";
				oUsertip.innerHTML = "只能包含字母、数字、下划线且不能小于五位";
				return false;
			}
			
		}
		
	}
		oReset.onclick = function(){
			oPwdtip.innerHTML = "";
			oUsertip.innerHTML = "";
			oUser.style.border = "1px solid #ddd";
			oPwd.style.border = "1px solid #ddd";
		}
	</script>
</body>
</html>