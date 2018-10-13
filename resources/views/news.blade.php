<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>{{$title}}</title>
  <link rel="stylesheet" href="/css/style.css" />
  <script type="text/javascript" src="/js/jquery1.42.min.js"></script>
  <!-- <script type="text/javascript" src="/js/mobilyslider.js"></script>
  <script type="text/javascript" src="/js/init.js"></script>
  <script type="text/javascript" src="/js/scripts.js"></script>
	<script type="text/javascript" src="./js/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="./js/jquery.scrollTo.js"></script> -->
</head>
  <body>
    <!-- 弹幕按钮 -->
    <div class="switch">关闭弹幕</div>
    <!-- BEGIN HEADER -->
    <div id="header-wrapper">

      <div id="header">

        <!-- BEGIN TOP NAVIGATION -->
        <ul id="top-navigation">
          <li><a href="/" target="_blank">主页</a></li>
        </ul>
        <!-- END TOP NAVIGATION -->

        <!-- BEGIN SOCIAL MEDIA -->
        @if (request()->cookie('username') == '')
        <div id="social-media">
          <a href="/ulogin">登录</a>
          <span>|</span>
          <a href="/register">注册</a>
        </div>
        @else
        <div id="social-media">
          <a href="#">{{ request()->cookie('username') }}</a>
          <span>|</span>
          <a href="/logout">退出</a>
        </div>
        @endif
        <!-- END SOCIAL MEDIA -->

        <!-- BEGIN LOGO -->
        <div id="logo">
          <a href="/index.html"><img src="/images/logo.png" alt="LeetPress" /></a>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN HEADER BANNER -->
        <div id="header-banner">
          <img src="/images/header-banner.png" alt="" />
        </div>
        <!-- END HEADER BANNER -->

        <!-- BEGIN NAVIGATION -->
        <div id="navigation-wrapper">
          <ul id="navigation">
            <li><a href="/">主页</a></li>
            <li><a href="#">游戏</a></li>
            <li><a href="#">动漫</a></li>
            <li><a href="#">影视</a></li>
          </ul>

          <!-- BEGIN SEARCH -->
          <div id="search">
            <form action="#" />
              <input type="text" name="search" placeholder="搜索" />
            </form>
          </div>
        <!-- END SEARCH -->

      </div>
      <!-- END NAVIGATION -->

    </div>

  </div>
  <!-- END HEADER -->
<link rel="stylesheet" type="text/css" href="/dist/css/barrager.css">
<script type="text/javascript" src="/dist/js/jquery.barrager.js"></script>
<script type="text/javascript">

$(".switch").click(function(event) {
  if ($(".switch").html() == "关闭弹幕") {
    $.fn.barrager.removeAll();
    clearInterval(looper);
    looper = null;
    $(".switch").html("开启弹幕");
  }else {
    run_once=true;
    looper_time=3*1000;
    do_barrager();
    $(".switch").html("关闭弹幕");
  }
});
	var url = window.location.href;
	var url_param = url.split("/")[4];
	//每条弹幕发送间隔
	var looper_time=3*1000;
	//是否首次执行
  var run_once=true;
	do_barrager();
	function do_barrager(){
	if(run_once){
			//如果是首次执行,则设置一个定时器,并且把首次执行置为false
			looper=setInterval(do_barrager,looper_time);
			run_once=false;
	}
	//获取
	$.ajax({
		url: '/danmu',
		type:'get',
		datatype:'json',
		data: {id: url_param},
		success:function(data) {
			$('body').barrager(data);
		}
	});
	}


</script>

	<!-- BEGIN MAIN WRAPPER -->
	<div id="main-wrapper">

		<!-- BEGIN MAIN -->
		<div id="main">

			<!-- BEGIN POST -->
			<div id="post">
				@foreach($newsinfo as $key)
				<p class="post-meta">来源:{{$key->source}}&nbsp&nbsp&nbsp&nbsp作者:{{$key->author}}&nbsp&nbsp&nbsp&nbsp点击量:{{$key->clicks}}&nbsp&nbsp&nbsp&nbsp{{$key->time}}</a></p>
				<h1 class="post-header">{{$key->title}}</h1>
				<div class="post-entry">
					{!! $key->content !!}
				</div>
				@endforeach

				<!-- BEGIN COMMENTS -->
				<div id="comments">
					<h3><strong>{{$num}}条评论</strong></h3>
					<ol class="comment">
            @foreach($comment as $key)
						<li>
							<div class="comment">
								<div class="avatar">
									<img src="/images/avatar.jpg" alt="" />
								</div>
								<div class="comment-details">
									<span class="author">{{$key->name}}</span>
									<span class="date">- {{$key->time}}</span>
									<p>{{$key->info}}</p>
								</div>
							</div>
						</li>
            @endforeach
					</ol>

					<h3><strong>留下评论吧</strong></h3>
          <form id="comment-form" action="post">
            @foreach($newsinfo as $key)
            <input type="text" name="a_id" value="{{$key->id}}" hidden="hidden">
            @endforeach
            <p>
							<textarea name="info" cols="88" rows="10"></textarea>
						</p>

						<p>
							<input type="button" value="发布" onclick="insert()"/>
						</p>
          </form>
          <script type="text/javascript">
            function insert() {
              $.ajax({
                type: "POST",//方法类型
                url: "/insertcomment" ,//url
                data: $('#comment-form').serialize(),
                success: function (data) {
                    console.log(data);
                    if (data == 2) {
                      console.log('请登录');
                    }else if (data == 1) {
                      console.log('评论成功');
                    }else {
                      console.log('评论失败');
                    }
                },
                error : function() {
                    alert("评论失败！");
                }
            });
            }
          </script>

				</div>
				<!-- END COMMENTS -->

			</div>
			<!-- END POST -->

		</div>
		<!-- END MAIN -->

		<!-- BEGIN SIDEBAR -->
		<div id="sidebar">

			<!-- BEGIN WIDGET -->
			<div class="widget">

				<h4 class="widget-title">热门要闻</h4>

				<div class="side-item">

					<img src="/images/newsthumbside.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">Interview with Bulletstorm creator</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

				<div class="side-item">

					<img src="/images/newsthumbside2.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">Minecraft sells over 1 million copies in one year</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

				<div class="side-item">

					<img src="/images/newsthumbside3.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">New Dragon Age 2 screenshots</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

				<div class="side-item">

					<img src="/images/newsthumbside4.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">FIFA 11 World Cup coverage</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

				<div class="side-item">

					<img src="/images/newsthumbside5.jpg" alt="" class="side-item-thumb" />
					<h4><a href="#">Diablo 3 release date rumors</a></h4>
					<span class="side-item-meta">March 14, 2011 - 32 Comments</span>

				</div>

			</div>
			<!-- END WIDGET -->

			</div>
			<!-- END WIDGET -->

		</div>
		<!-- END SIDEBAR -->



	<!-- END MAIN WRAPPER -->

	<!-- BEGIN FOOTER TOP -->
	<div id="footer-top-wrapper">

		<div id="footer-top">

			<ul id="footer-navigation">
				<li><span> // </span><a href="#">Home</a></li>
				<li><span> // </span><a href="#">About Us</a></li>
				<li><span> // </span><a href="#">Contact</a></li>
				<li><span> // </span><a href="#">Page Templates</a></li>
			</ul>

			<div id="back-top">
				<a href="#">Back to top</a>
			</div>

		</div>

	</div>
	<!-- END FOOTER TOP -->

	<!-- BEGIN FOOTER -->
	<div id="footer-wrapper">

		<div id="footer">

			<!-- BEGIN FOOTER WIDGET -->
			<div class="footer-widget left">

				<h3>Latest News</h3>

				<ul>
					<li><a href="#">Minecraft sells over 1 million copies</a></li>
					<li><a href="#">Little Big Planet 2 hits the streets</a></li>
					<li><a href="#">10 great iPhone games</a></li>
					<li><a href="#">FIFA 11 breaks all sales records</a></li>
					<li><a href="#">Diablo 3 release date rumors</a></li>
				</ul>

			</div>
			<!-- END FOOTER WIDGET -->

			<!-- BEGIN FOOTER WIDGET -->
			<div class="footer-widget middle">

				<h3>Archives</h3>

				<ul>
					<li><a href="#">March 2011</a></li>
					<li><a href="#">February 2011</a></li>
					<li><a href="#">January 2011</a></li>
					<li><a href="#">December 2010</a></li>
					<li><a href="#">November 2010</a></li>
				</ul>

			</div>
			<!-- END FOOTER WIDGET -->

			<!-- BEGIN FOOTER WIDGET -->
			<div class="footer-widget middle">

				<h3>LeetPress On</h3>
				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Youtube</a></li>
					<li><a href="#">iPhone</a></li>
				</ul>

			</div>
			<!-- END FOOTER WIDGET -->

			<!-- BEGIN FOOTER WIDGET -->
			<div class="footer-widget right">

				<h3>About LeetPress</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

			</div>
			<!-- END FOOTER WIDGET -->

		</div>

	</div>
	<!-- END FOOTER -->

	<!-- BEGIN FOOTER BOTTOM WRAPPER -->
	<div id="footer-bottom-wrapper">

		<!-- BEGIN FOOTER BOTTOM -->
		<div id="footer-bottom">

			<span class="footer-bottom-left">Copyright (C) 2011 - LeetPress. All rights reserved.</span>

		</div>
		<!-- END FOOTER BOTTOM -->

	</div>
	<!-- END FOOTER BOTTOM WRAPPER -->


</body>
</html>
