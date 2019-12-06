<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/howto.css') }}">
    <title>How to</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
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
      <li><a href="{{ route('bestty.howto') }}" method="GET">？？？？</a></li>
      <li><a href="#">ちんちん</a></li>
    </ul>
  </div><br><br>
<!-- 内容 -->
<div class="howto-all">
    <img src="{{ asset('img/denkyu.png') }}" alt="a image of denkyu" class="img-denkyu">
    <div class="howto-title">
      <h3>How to</h3>
    </div>
</div>
<div class="howto-content">
    <img src="{{ asset('img/chose.png') }}" alt="a image of chose" class="img-chose">
    <div class="howto-text">
      <h3>1.First step</h3>
      <h2>Chose gender</h2>
    </div>
</div>
<div class="howto-content">
    <div class="howto-text">
      <h3>2.Second step</h3>
      <h2>Answer 9 questions!</h2>
    </div>
    <img src="{{ asset('img/answer.png') }}" alt="a image of answer" class="img-answer">
</div>
<div class="howto-content">
  <img src="{{ asset('img/result-present.png') }}" alt="a image of result" class="img-result">
  <div class="howto-text">
    <h3>3.Third step</h3>
    <h2>Check result!</h2>
  </div>
</div>
<div class="btn-return">
<a href="{{ route('bestty.index') }}"><button class="return-home btn btn-info">Let's check!</button></a>
</div>
<footer class="footer">
  <nav>
    <div class="sns-icon">
        <i class="fab fa-line fa-2x"></i>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
</body>
</html>