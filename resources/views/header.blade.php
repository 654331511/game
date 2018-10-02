<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>漫游社</title>
  <link rel="stylesheet" href="/css/style.css" />
  <script type="text/javascript" src="/js/jquery1.42.min.js"></script>
  <script type="text/javascript" src="/js/superfish.js"></script>
  <script type="text/javascript" src="/js/mobilyslider.js"></script>
  <script type="text/javascript" src="/js/init.js"></script>
  <script type="text/javascript" src="/js/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="/js/jquery.scrollTo.js"></script>
  <script type="text/javascript" src="/js/scripts.js"></script>
  <script>
  $(document).ready(function() {
    $('ul#navigation').superfish();
    $('ul#top-navigation').superfish();
  });
  </script>
  <body>

    <!-- BEGIN HEADER -->
    <div id="header-wrapper">

      <div id="header">

        <!-- BEGIN TOP NAVIGATION -->
        <ul id="top-navigation">
          <li><a href="/" target="_blank">主页</a></li>
        </ul>
        <!-- END TOP NAVIGATION -->

        <!-- BEGIN SOCIAL MEDIA -->
        <!-- <div id="social-media">
          <a href="#">登录</a>
          <span>|</span>
          <a href="#">注册</a>
        </div> -->
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
