<!DOCTYPE HTML>
<html>
<head>
<title>用户登录</title>
<link href="/admincss/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
</head>
<body>
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>登录</h1>
		 <div class="alert-close"> </div>
	</div>
		<form action="/ucheck" method="post">
			<li>
				<input type="text" class="text" name="name" placeholder="name" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'username';}"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" placeholder="password" name="password" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'password';}"> <a href="#" class="icon lock"></a>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" value="登录" >
				<h4><a href="#">忘记密码?</a></h4>
				<div class="clear">
				</div>
			</div>
		</form>
		</div>
	</div>
	</div>
	<div class="clear"> </div>

</body>
</html>
