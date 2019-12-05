

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>HOME</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- ※基本共通設定 -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<title>ページのタイトル</title>
<meta property="og:title" content="BESTTY" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://127.0.0.1:8000/#" />
<meta property="og:image" content="{{ asset('img/present.png') }}" />
<meta property="og:description" content="最高のプレゼントを最高の相手に" />

<!-- Facebook用設定 -->
<meta property="fb:app_id" content="2627128337362838" />


<!-- ※Twitter共通設定 -->
<meta name="twitter:card" content="summary_large_image" />
</head>
<body>
<!-- ヘッダー -->

    <!-- ヘッダー -->

    <header class="site-header">
      <h2 class="header-character"> BESTTY</h2>
    </header>
    <div class="menu2">
        <div class="menuWrapper">
          <span class="menuBtn">
          </span>
        </div>
        <ul id="menu">
          <li><a href="{{ route('bestty.index') }}" method="GET">ホーム</a></li>
          <li><a href="{{ route('bestty.howto') }}" method="GET">使い方</a></li>
          <li><a href="#">ちんちん</a></li>
        </ul>
      </div>

<!-- 内容 -->

<diV class="">
<div class="top-img-present">
<img src="{{ asset('img/present.png') }}" alt="a image of present" class="present-img">
</div>
    <div class="bestty-title">
      <h4 class="bestty-b">B</h4>
      <h4 class="bestty-e">E</h4>
      <h4 class="bestty-s">S</h4>
      <h4 class="bestty-t">T</h4>
      <h4 class="bestty-t2">T</h4>
      <h4 class="bestty-y">Y</h4>
    </div>



    <p class="text-center">センスでプレゼントを決めるサイト</p>
    <h3 class="text-center choose-ex">プレゼントを贈る相手の性別を選択しよう！</h3>

    <div class="text-center gender-chose">

    <a  href="{{ route('bestty.ma_question') }}" method="GET"><i class="fas fa-male icon-male"></i></a>
    <a href="{{ route('bestty.fe_question') }}" method="GET"><i class="fas fa-female icon-female"></i></a>

    </div>

    <div class="howto-content">
      <a href="{{ route('bestty.howto') }}" method="GET"><img src="{{ asset('img/denkyu.png') }}" alt="a image of mens" class="img-present3"></a>
      <div class="howto-title">
        <h3>How to</h3>
      </div>
    </div>

    <div class="text-center">
      <h4 class="bestty-content">BESTTYとは</h4>
     <div class="container-fluid"> 
       <div class="row bestty-ex">
         <div class="text-color-best text-best">
           BEST
         </div>
         <div class="text-x">
           x
         </div>
         <div class="text-color-happy text-happy">
           HAPPY
         </div>
       </div>
     </div>

    <p class="text-color-best">BEST</p>
    <p>なプレゼントをして、お互いに</p>
    <p class="text-color-happy">HAPPY</p>
    <p>になろうという</p>
    <p>コンセプトです。</p>


    </div>





    <footer class="footer">
  <nav>
    <div class="sns-icon">

    <a class="fab fa-line fa-2x" href="http://line.me/R/msg/text/?best gift for best friend,http://127.0.0.1:8000"></a>
        
        <a href="http://twitter.com/share?url=http://127.0.0.1:8000&text=gift for best friend" class="fab fa-twitter fa-2x" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <a href="https://www.facebook.com/sharer/sharer.php?u=http://qiita.com/katsuma">

        <i class="fab fa-facebook-f fa-2x"></i>
      </a>
       
        
    </div>
    <img src="{{ asset('img/present.png') }}" alt="a image of present" class="img-present">
    <div class="bestty-title">
      <h4 class="bestty-b">B</h4>
      <h4 class="bestty-e">E</h4>
      <h4 class="bestty-s">S</h4>
      <h4 class="bestty-t">T</h4>
      <h4 class="bestty-t2">T</h4>
      <h4 class="bestty-y">Y</h4>
    </div>
    <ul class="footer-text" style="list-style: none; padding-left: 0;">
      <li>
        <a href="" class="a-footer">サポート</a>
      </li>
      <li>
        <a href="" class="a-footer">個人情報保護</a>
      </li>
      <li>
        <a href="" class="a-footer">利用規約</a>
      </li>
      <li>
        <a href="" class="a-footer">運営会社</a>
      </li>
      <li>
        <a href="" class="a-footer">Nexseed</a>
      </li>
    </ul>
  </nav>
</footer>
<small class="copyright">@besttyinc.</small>



</diV>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
</body>
</html>
