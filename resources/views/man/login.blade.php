<!DOCTYPE HTML>
<html>
<head>
<title>管理员登录</title>
<link href="/admincss/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="/js/jquery1.42.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});
});
</script>
</head>
<body>
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>登录</h1>
		 <div class="alert-close"> </div>
	</div>
		<form>
			<li>
				<input type="text" class="text" value="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"> <a href="#" class="icon lock"></a>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" value="登录" >
				<h4><a href="#">忘记密码?</a></h4>
						  <div class="clear">  </div>
			</div>

		</form>
		</div>
	</div>
	</div>
	<div class="clear"> </div>

</body>
</html>
