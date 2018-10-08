@include('header')
<script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.source.js"></script>
<!-- BEGIN SLIDER -->
<div class="slider">
  <div class="sliderContent">

    <!-- BEGIN FEATURED ITEM -->
    <div class="featured-item" style="background:#000 url(/images/feat2.jpg) no-repeat center; height:280px;">
      <div class="featured-inner">
        <div class="featured-inner">
          <div class="featured-arrows"></div>
          <h1><a href="#">死亡空间</a></h1>
          <p class="featured-meta">By Sebastian Rosenkvist, March 14, 2011</p>
        </div>
      </div>
    </div>
    <!-- END FEATURED ITEM -->

    <!-- BEGIN FEATURED ITEM -->
    <div class="featured-item" style="background:#000 url(/images/feat1.jpg) no-repeat center; height:280px;">
      <div class="featured-inner">
        <div class="featured-inner">
          <div class="featured-arrows"></div>
          <h1><a href="#">子弹风暴</a></h1>
          <p class="featured-meta">By John Doe, March 14, 2011</p>
        </div>
      </div>
    </div>
    <!-- END FEATURED ITEM -->

    <!-- BEGIN FEATURED ITEM -->
    <div class="featured-item" style="background:#000 url(/images/feat6.jpg) no-repeat center; height:280px;">
      <div class="featured-inner">
        <div class="featured-inner">
          <div class="featured-arrows"></div>
          <h1><a href="#">暗黑破坏神3</a></h1>
          <p class="featured-meta">By Sebastian Rosenkvist, March 14, 2011</p>
        </div>
      </div>
    </div>
    <!-- END FEATURED ITEM -->

    <!-- BEGIN FEATURED ITEM -->
    <div class="featured-item" style="background:#000 url(/images/feat5.jpg) no-repeat center; height:280px;">

      <div class="featured-inner">

        <div class="featured-inner">

          <div class="featured-arrows"></div>
          <h1><a href="#">我的世界</a></h1>
          <p class="featured-meta">By Sebastian Rosenkvist, March 14, 2011</p>

        </div>

      </div>

    </div>
    <!-- END FEATURED ITEM -->

  </div>

  <div class="top-overlay"></div>
  <div class="bottom-overlay"></div>

</div>
<!-- END SLIDER -->

<!-- BEGIN MAIN WRAPPER -->
<div id="main-wrapper">

  <!-- BEGIN MAIN -->
  <div id="main">

    <!-- BEGIN NEWS WRAPPER -->
    <div id="news-wrapper">

      <h3 class="section-title">今日要闻</h3>

      <!-- BEGIN NEWS ITEM -->
      @foreach($content as $key)
      <div class="news-item">
        <div class="news-thumb-wrapper">
          <a href="/news/{{$key->id}}" target="_blank"><img src="{{$key->homepage}}" alt="" /></a>
          <div class="news-arrows"></div>
          <h1><a href="/news/{{$key->id}}" target="_blank">{{$key->hometitle}}</a></h1>
        </div>
        <div class="news-meta-wrapper">
          <span class="news-meta">{{$key->time}}</span>
        </div>
        <p>{{$key->homecon}}<a href="/news/{{$key->id}}" target="_blank">查看更多</a></p>
      </div>
      @endforeach
      <!-- END NEWS ITEM -->
    </div>

              <!-- END NEWS WRAPPER -->

              <!-- BEGIN PAGINATION -->
              <div id="pagination">
              @if($content->currentPage() == 1)
              <span class="current">{{$content->currentPage()}}</span>
              <a href="{{$content->nextPageUrl()}}"><span>下一页</span></a>
              <a href="{{$content->lastPage()}}"><span>尾页</span></a>
              @else
              <a href="/"><span>首页</span></a>
              <a href="{{$content->previousPageUrl()}}"><span>上一页</span></a>
              @endif
            </div>
              <!-- <div id="pagination">
                <span class="current">1</span>
                <a href="#"><span>2</span></a>
                <a href="#"><span>3</span></a>
                <a href="#"><span>4</span></a>
                <a href="#"><span>5</span></a>
                <a href="#"><span>6</span></a>
                <a href="#"><span>7</span></a>
                <a href="#"><span>8</span></a>
                <a href="#"><span>Next</span></a>
              </div> -->
              <!-- END PAGINATION -->

            </div>
            <!-- END MAIN -->

            <!-- BEGIN SIDEBAR -->
            <div id="sidebar">

              <div class="widget">

                <h4 class="widget-title tabs">近期发售</h4>

                <div class="panel-wrapper">
                  <a href="#panel-1" rel="panel" class="selected">所有</a>
                  <a href="#panel-2" rel="panel">Xbox</a>
                  <a href="#panel-3" rel="panel">PS</a>
                  <a href="#panel-4" rel="panel">PC</a>
                  <a href="#panel-5" rel="panel">switch</a>
                </div>

                <div id="mask">
                  <div id="panel">

                    <div id="panel-1">

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Dragon Age II</a></h4>
                        <span class="side-item-cat">Xbox 360</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score darkgreen">7.8</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb2.jpg" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Call of Duty: Black Ops</a></h4>
                        <span class="side-item-cat">PC, Xbox 360</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">9.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb3.jpg" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Little Big Planet 2</a></h4>
                        <span class="side-item-cat">Wii</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score yellow">5.7</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb4.jpg" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">PC</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item last">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Dead Space 2</a></h4>
                        <span class="side-item-cat">PS3, Wii</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score darkred">3.5</div>

                      </div>

                    </div>

                    <div id="panel-2">

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">Xbox 360</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">Xbox 360</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score red">1.6</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">Xbox 360</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">Xbox 360</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item last">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Dragon Age II</a></h4>
                        <span class="side-item-cat">Xbox 360</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score yellow">5.2</div>

                      </div>

                    </div>

                    <div id="panel-3">

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">PS3</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">PS3</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">PS3</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">PS3</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item last">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Dead Space 2</a></h4>
                        <span class="side-item-cat">PS3, Wii</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score darkred">3.5</div>

                      </div>

                    </div>

                    <div id="panel-4">

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">PC</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">PC</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">PC</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">PC</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item last">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Dead Space 2</a></h4>
                        <span class="side-item-cat">PC</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score darkred">3.5</div>

                      </div>

                    </div>

                    <div id="panel-5">

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">Wii</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">Wii</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">Wii</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Mass Effect 2</a></h4>
                        <span class="side-item-cat">Wii</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score green">8.5</div>

                      </div>

                      <div class="side-item last">

                        <img src="/images/gamethumb.png" alt="" class="side-item-thumb" />
                        <h4><a href="/review-post.html">Dead Space 2</a></h4>
                        <span class="side-item-cat">Wii</span>
                        <span class="side-item-meta">March 14, 2011 - 32 Comments</span>
                        <div class="side-score darkred">3.5</div>

                      </div>

                    </div>

                  </div>
                </div>

              </div>

              <!-- BEGIN广告 -->
              <div class="widget-banner">
                <img src="/images/sidebar-banner.jpg" alt="" />
              </div>
              <!-- END广告 -->

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

            </div>

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
