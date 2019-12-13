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
      <img src="{{ asset('img/kan.jpg') }}" class="result-img" alt="結果画面の画像" >
      <h1 class="result-text">まじめ系男子</h1>
  </div>
  <div class="result-ex">
    <h4>まじめ系男子は仕事や勉強が大好き！<br>便利なものが好きな男子たちにはこんなものがオススメ！</h4>
  </div>
        <!-- container -->
        <div class="container mt-1">
          <h2>彼氏へ</h2>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/g-shock-img.jpg') }}" alt="ac" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">
                  </h3>
                  <p class="card-text">CASIO カシオ　ジーショック タフソーラー 電波時計 MULTIBAND 6 GW-M5610-1 逆輸入</p>
                  <a href="https://www.amazon.co.jp/CASIO-%E3%82%AB%E3%82%B7%E3%82%AA-%E3%82%B8%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%83%E3%82%AF-%E3%82%BF%E3%83%95%E3%82%BD%E3%83%BC%E3%83%A9%E3%83%BC-MULTIBAND-GW-M5610-1/dp/B007RWZHXO/ref=sr_1_3?qid=1576034963&refinements=p_89%3AG-SHOCK%28%E3%82%B8%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%83%E3%82%AF%29&s=watch&sr=1-3" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/poal.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">ポールスミス Paul Smith 正規品 本革 シティエンボス キーケース ショップバッグ付</p>
                  <a href="https://www.amazon.co.jp/%E3%83%9D%E3%83%BC%E3%83%AB%E3%82%B9%E3%83%9F%E3%82%B9-Paul-Smith-%E3%82%B7%E3%83%86%E3%82%A3%E3%82%A8%E3%83%B3%E3%83%9C%E3%82%B9-%E3%82%B7%E3%83%A7%E3%83%83%E3%83%97%E3%83%90%E3%83%83%E3%82%B0%E4%BB%98/dp/B01LEJXH0K/ref=sr_1_3?dchild=1&qid=1576036094&refinements=p_89%3APaul+Smith%28%E3%83%9D%E3%83%BC%E3%83%AB%E3%83%BB%E3%82%B9%E3%83%9F%E3%82%B9%29&s=bags&sr=1-3" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>

            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('img/mahura-.jpeg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">POLO RALPH LAURENウール100%マフラー PC0458 タータンチェック柄
                  </p>
                  <a href="https://www.amazon.co.jp/%E3%83%A9%E3%83%AB%E3%83%95%E3%83%AD%E3%83%BC%E3%83%AC%E3%83%B3%E3%80%90POLO-RALPH-LAUREN%E3%80%91%E3%82%A6%E3%83%BC%E3%83%AB100-%E3%83%9E%E3%83%95%E3%83%A9%E3%83%BC-PC0458-%E3%82%BF%E3%83%BC%E3%82%BF%E3%83%B3%E3%83%81%E3%82%A7%E3%83%83%E3%82%AF%E6%9F%84/dp/B07YMRGW5Z/ref=sr_1_12?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=%E3%83%A9%E3%83%AB%E3%83%95%E3%83%AD%E3%83%BC%E3%83%AC%E3%83%B3+%E3%83%9E%E3%83%95%E3%83%A9%E3%83%BC+%E3%83%A1%E3%83%B3%E3%82%BA&qid=1576080073&sr=8-12" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
        ​
          </div>
        </div>

        <div class="container mt-1">
          <h2>友達へ</h2>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/penpen.jpg') }}" alt="ac" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">
                  </h5>
                  <p class="card-text">ウォーターマン メトロポリタン</p>
                  <a href="https://www.amazon.co.jp/%E3%82%A6%E3%82%A9%E3%83%BC%E3%82%BF%E3%83%BC%E3%83%9E%E3%83%B3-%E3%83%A1%E3%83%88%E3%83%AD%E3%83%9D%E3%83%AA%E3%82%BF%E3%83%B3-%E3%82%A8%E3%83%83%E3%82%BB%E3%83%B3%E3%82%B7%E3%83%A3%E3%83%AB-%E3%83%96%E3%83%A9%E3%83%83%E3%82%AFCT-S2259322/dp/B005IEQN22/ref=sr_1_2_sspa?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%82%A6%E3%82%A9%E3%83%BC%E3%82%BF%E3%83%BC%E3%83%9E%E3%83%B3%EF%BC%88WATERMAN%EF%BC%89+%E3%83%9C%E3%83%BC%E3%83%AB%E3%83%9A%E3%83%B3&qid=1576080332&sr=8-2-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyWFlYUE5LNzM5QTM2JmVuY3J5cHRlZElkPUEwMDM0MTkxMjdNNTBJMkpaM0hQMyZlbmNyeXB0ZWRBZElkPUEyNjZXT1BTTzdFUUMzJndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ==" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/taoru.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">hiorie 今治タオル フェイスタオル リ 4枚セット</p>
                  <a href="https://www.amazon.co.jp/dp/B07W68XNWM/ref=twister_B07SWYZDLQ?_encoding=UTF8&psc=1" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>

            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('img/suitou.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">KINTO トラベルタンブラー 350ml
                  </p>
                  <a href="https://www.amazon.co.jp/KINTO-%E3%82%AD%E3%83%B3%E3%83%88%E3%83%BC-%E3%82%BF%E3%83%B3%E3%83%96%E3%83%A9%E3%83%BC-%E3%83%88%E3%83%A9%E3%83%99%E3%83%AB%E3%82%BF%E3%83%B3%E3%83%96%E3%83%A9%E3%83%BC-20935-0/dp/B075LN813Z/ref=sr_1_3?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%88%E3%83%A9%E3%83%99%E3%83%AB%E3%82%BF%E3%83%B3%E3%83%96%E3%83%A9%E3%83%BC&qid=1576114001&sr=8-3&th=1" class="btn btn-outline-info btn-sm">detail</a>
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


<a class="fab fa-line fa-2x" href="http://line.me/R/msg/text/?私は、向上心高め系男子。欲しいプレゼントは、流行をとらえているセンスのあるモノ！みんなも診断して結果をシェアしよう！！！"></a>


    
    <a href="http://twitter.com/share?url=http://127.0.0.1:8000/bestty/result-ma1&text=私は、向上心高め系男子。欲しいプレゼントは、持っているだけで自分がワンランクアップしたように感じるもの！みんなも診断して結果をシェアしよう！！！" class="fab fa-twitter fa-2x" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
</body>
</html>