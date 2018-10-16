@include('header')
<script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.source.js"></script>
<!-- BEGIN SLIDER -->
<div class="slider">
  <div class="sliderContent">

    <!-- BEGIN FEATURED ITEM -->
    @foreach($banner as $k)
    <div class="featured-item" style="background:#000 url({{$k->image}}) no-repeat center; height:280px;">
      <div class="featured-inner">
        <div class="featured-inner">
          <div class="featured-arrows"></div>
          <h1><a href="{{$k->url}}" target="_blank">{{$k->hometitle}}</a></h1>
        </div>
      </div>
    </div>
    @endforeach
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
          <span class="news-meta">{{ str_limit($key->time,16,'') }}</span>
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

@include('footer')
