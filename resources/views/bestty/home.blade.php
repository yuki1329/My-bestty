

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
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<!-- ヘッダー -->

    <header class="site-header">
      <h2 class="header-character"> BESTTY</h2>
    </header><br><br>
    <div class="menu2">
        <div class="menuWrapper">
          <span class="menuBtn">
          </span>
        </div>
        <ul id="menu">
          <li><a href="#">風俗を探す</a></li>
          <li><a href="#">デリヘルを探す</a></li>
          <li><a href="#">ちんちんを探す</a></li>
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
    <p class="text-center">BESTTY</p>
    <p class="text-center">プレゼントを贈る相手を男性・女性で決めよう！</p>

    <div class="text-center gender-chose">
      
    {{-- <img src="{{ asset('img/13791.jpg') }}" alt="a image of mens" class="img-present2"> --}}
    <i class="fas fa-male icon-male" action="{{ route('bestty.ma_question') }}" method="GET"></i>
    {{-- <img src="{{ asset('img/13790.jpg') }}" alt="a image of womens" class="img-present2"> --}}
    <i class="fas fa-female icon-female"></i>
      
    </div>

    <div class="howto-content">
    <img src="{{ asset('img/denkyu.png') }}" alt="a image of mens" class="img-present3">
    <div class="howto-title">
      <h3>How to</h3>
    </div>
    </div>

    <div class="text-center">
      <h4 class="bestty-content">BESTTY</h4>
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
        <i class="fab fa-instagram fa-2x"></i>
        <i class="fab fa-twitter fa-2x"></i>
        <i class="fab fa-facebook-f fa-2x"></i>
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
</body>
</html>
