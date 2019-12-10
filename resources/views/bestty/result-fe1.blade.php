<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <title>RESULT</title>
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
      <li><a href="{{ route('bestty.index') }}" method="GET">ホームへ戻る</a></li>
      <li><a href="{{ route('bestty.howto') }}" method="GET">使い方</a></li>
      <li><a href="#">ちんちん</a></li>
    </ul>
  </div>

{{-- 内容 --}}
<div class="result-all">
  <div id="result-top">
  <h1>あなたがプレゼントしたい人のタイプは・・・・</h1>
      <img src="{{ asset('img/kirakiragirl.jpeg') }}" class="result-img" alt="結果画面の画像" >
      <h1 class="result-text">1系女子</h1>
  </div>
  <div class="result-ex">
    <h4>キラキラ系女子はパーティーやイベントが大好き！<br>流行や人気なものに敏感な彼女たちにはこんなものがオススメ！</h4>
  </div>
        <!-- container -->
        <div class="container mt-1">
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/presents.jpg') }}" alt="ac" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">Present1
                  </h5>
                  <p class="card-text">mosugu chiristmas dayo</p>
                  <a href="#" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/presents.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">Present2</h5>
                  <p class="card-text">kuribocchi wa kanashiine</p>
                  <a href="#" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>

            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('img/presents.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">Present3</h5>
                  <p class="card-text">Yuki Ueno wa kuribocchi
                  </p>
                  <a href="#" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
        ​
          </div>
        </div>

      <div class="top-btn">
      <a href="{{ route('bestty.index') }}" class="btn-flat-simple">
        <i class="fa fa-caret-right"></i> トップに戻る
      </a>
      </div>
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