<!DOCTYPE HTML>
<html>
<head>
<title>用户注册</title>
<link href="/admincss/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="/js/layer.js"></script>
</head>
<body>
<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>注册</h1>
		 <div class="alert-close"> </div>
	</div>
		<form id="form" method="post">
			<li>
				<input type="text" class="text" name="name" placeholder="用户名" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = '用户名';}"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password" placeholder="密码" name="password" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = '密码';}"> <a href="#" class="icon lock"></a>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="button" value="注册" onclick="reg()">
				<h4><a href="/ulogin">已有账号?登录</a></h4>
				<div class="clear">
				</div>
			</div>
		</form>
		</div>
	</div>
	<div class="clear"> </div>
  <script type="text/javascript">
    function reg() {
      $.ajax({
        type: "POST",//方法类型
        url: "/registercheck" ,//url
        data: $('#form').serialize(),
        success: function (data) {
            if (data == 3) {
              layer.msg('用户已存在');
            }
            else if (data == 1) {
              layer.msg('注册成功',
              {
                time: 2000
              }, function(){
                window.location.href = "/";
              }
            );
            }else if (data == 2) {
              layer.msg('注册失败');
            }
        },
        error : function() {
            layer.msg('注册失败');
        }
    });
    }
  </script>
</body>
</html>
