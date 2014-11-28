<!doctype html>
<html>
<head>
  <base href="http://thankourheroes.us">
  <meta charset="utf-8">
  <title>Thank Our Heroes</title>
  <link rel="stylesheet" href="f/f.css">
  <link rel="stylesheet" href="s.css">
  <script src="jq.js"></script>
  <script>
    $(function(){
      $(window).on("scroll", function(){
        if($(window).scrollTop()>='340'){
          $("body")
            .css("background-attachment","fixed")
            .children("hgroup")
              .addClass("fx")
            .end()
            .children("#content")
              .css("margin-top","410px");
        } else if ($(window).scrollTop()<='340'){
          $("body")
            .css("background-attachment","scroll")
            .children("hgroup")
              .removeClass("fx")
            .end()
            .children("#content")
              .css("margin-top","10px");
        }
      });

      // var forward = true;
      $(".thank").mouseenter(function(){
        var $qbox = $(this).find(".qbox"),
            $name = $qbox.find(".name"),
            offset = $name.width() - $qbox.width() + 10;
        if( offset > 0 ){
          $name.animate({
              marginLeft: -offset
            }, offset * 30, 'swing', function(){
              $name.animate({
                  marginLeft: 0
                }, offset * 30, 'swing', function(){
                  $(this).trigger("mouseenter");
              });
          });
        }
      }).mouseleave(function(){
        var $name = $(this).find(".name");
        $name.stop(true).animate({
            marginLeft: 0
          }, 200, 'swing');
      });
    });
  </script>
  <style>
    body {
      margin:0;
      padding:0;
      background:url('bg.png') scroll;
    }
    hgroup {
      width:100%;
      height:400px;
      background-size:cover;
      background-repeat:no-repeat;
      background-attachment:fixed;
      position:relative;
      box-shadow:
        inset 0px 0px 0px 1px rgba(255,255,255,0.3),
        0px 0px 5px rgba(0,0,0,0.8);
      -webkit-animation:bgswitch 20s infinite;
    }
    hgroup.fx {
      z-index:999;
      position:fixed;
      top:-340px;
    }
    hgroup > header {
      width:980px;
      position:fixed;
      z-index:999;
      margin-left:50%;
      left:-490px;
      top:0;
    }
    hgroup > header a {
      margin:0;
      padding:0 20px;
      height:60px;
      line-height:65px;
      text-align:center;
      font-weight:normal;
      font-size:1.35em;
      float:left;
      font-family:'ChunkFive',sans-serif;
      background:rgba(0,0,0,0.5);
      color:#fff;
      transition:all 0.2s ease-in-out;
      text-decoration:none;
      text-shadow:0px 1px 0px rgba(0,0,0,0.8);
    }
    .pnk {
      color:#3e94d1;
      transition:all 0.2s ease-in-out;
    }
    .wh {
      display:inline-block;
      transition:all 0.2s ease-in-out;
    }
    nav {
      float:right;
    }
    nav a {
      margin-left:20px !important;
    }
    hgroup > header a:hover {
      background:#3e94d1;
    }
    hgroup > header a:hover > .pnk {
      color:#fff;
    }
    hgroup > header a:hover > .wh {
      -webkit-transform:scale(0.8,0.8);
    }
    #content {
      width:1000px;
      margin:10px auto;
    }
    .thank {
      width:230px;
      height:230px;
      position:relative;
      background:#f9f9f9;
      border:1px solid rgba(0,0,0,0.2);
      box-shadow:0px 0px 5px rgba(0,0,0,0.2);
      border-radius:3px;
      box-sizing:border-box;
      z-index:998;
      margin:10px;
      float:left;
      //overflow:hidden;
      transition:all 0.15s ease-in-out;
    }
    .flyout {
      width:40px;
      height:200px;
      box-sizing:border-box;
      border-width:0;
      border-style:solid;
      border-color:rgba(0,0,0,0.2);
      background:#f9f9f9;
      border-radius:3px 0px 0px 3px;
      z-index:-1;
      position:absolute;
      top:10px;
      left:0;
      transition:all 0.2s ease-in-out;
    }
    .flyout:before, .flyout:after {
      content:'';
      position:absolute;
      display:block;
      width:0;
      height:0;
      border-color:transparent transparent transparent rgba(0,0,0,0.2);
      border-style:solid;
      border-width:0;
      right:-20px;
      top:95px;
    }
    .flyout:after {
      right:-19px;
      border-color:transparent transparent transparent #f9f9f9;
    }
    .thank:hover {
      box-shadow:0px 0px 10px rgba(0,0,0,0.8);
    }
    .thank:hover > .flyout {
      left:-50px;
      width:50px;
      border-width:1px;
      z-index:-1;
    }
    .thank:hover > .flyout:before, .thank:hover > .flyout:after {
      border-width:10px;
    }
    article header > img, .qbox {
      float:left;
    }
    .qbox {
      width:168px;
      height:60px;
      padding:10px;
      background:white;
      box-sizing:border-box;
      border-bottom:1px solid rgba(0,0,0,0.2);
      overflow:hidden;
      display:inline-block;
      white-space:nowrap;
    }
    .qbox:after {
      content:'';
      display:block;
      margin-left:-30px;
      margin-top:-12px;
      width:0;
      height:0;
      border-color:transparent #fff transparent transparent;
      border-style:solid;
      border-width:10px;
    }
    .qbox .def, .qbox .name {
      font-family:'ChunkFive',sans-serif;
      display:block;
    }
    .qbox .def {
      font-size:0.8em;
      height:15px;
      color:#777;
    }
    .qbox .name {
      display:inline-block;
      color:#3e94d1;
      font-size:1.3em;
      text-shadow:0px 1px 0px rgba(0,0,0,0.8);
    }
    footer {
    
    }
    @-webkit-keyframes bgswitch {
      0%,15%,100% {
        background-image:url('http://lorempixel.com/1200/500/people');
      }
      25%,40% {
        background-image:url('http://lorempixel.com/1200/500/sports');
      }
      50%,65% {
        background-image:url('http://lorempixel.com/1200/500/abstract');
      }
      75%,90% {
        background-image:url('http://lorempixel.com/1200/500/nature');
      }
    }
  </style>
</head>
<body>
  <hgroup>
    <header>
      <a href="/">
        <span class="pnk">THANK</span><span class="wh">OUR</span><span class="pnk">HEROES</span>
      </a>
      <nav>
        <a href="about">ABOUT</a>
        <a href="thank">SAY THANKS</a>
      </nav>
    </header>
    <section id="feature">
          </section>
  </hgroup>
  <section id="content">
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/1" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">PURAG MOUMDJIAN</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/2" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/3" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
        
      </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/4" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/5" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/6" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/7" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/8" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/9" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/10" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/sports/0" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/people/1" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/people/2" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/people/3" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/people/4" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
    <article class="thank">
      <header>
        <img src="http://lorempixel.com/60/60/people/5" alt>
        <div class="qbox">
          <span class="def">THANK YOU</span>
          <span class="name">JOHN SMITH</span>
        </div>
      </header>
      <aside class="desc">
        Thanks for everything buddy.
      </aside>
      <aside class="flyout">
              </aside>
    </article>
  </section>
  <footer>
    Some footer text.
  </footer>
</body>
</html>