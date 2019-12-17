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
      <img src="{{ asset('img/otonajoshi.jpg') }}" class="result-img" alt="結果画面の画像" >
      <h1 class="result-text">オトナ女子</h1>
  </div>
  <div class="result-ex">
    <h4>オトナ女子は仕事や勉強をしっかりこなすお姉さん的存在！<br>長く使えるシンプルなものを好む彼女たちにはこんなものがオススメ！</h4>
  </div>
       <!-- container -->
       <div class="container mt-1">
        <h2>彼女へのプレゼント</h2>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ asset('img/scarf.jpg') }}" alt="ac" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Scarf
                </h3>
                <a href="https://www.amazon.co.jp/POLO-RALPH-LAUREN-%E3%82%BF%E3%83%BC%E3%82%BF%E3%83%B3%E3%83%81%E3%82%A7%E3%83%83%E3%82%AF-HDerl19w104-F_b7/dp/B082R64QXB/ref=sr_1_5?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=%E3%83%9E%E3%83%95%E3%83%A9%E3%83%BC+%E3%83%AC%E3%83%87%E3%82%A3%E3%83%BC%E3%82%B9&qid=1576461880&sr=8-5" class="card-text" >[ポロラルフローレン] 【イタリア製 ウール】タータンチェック マフラー 厚手 [並行輸入品]</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ asset('img/watch.jpg') }}" alt="" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Watches</h3>
                <a href="https://www.amazon.co.jp/%E3%82%B3%E3%83%BC%E3%83%81-%E3%83%AC%E3%83%87%E3%82%A3%E3%83%BC%E3%82%B9-COACH-14503117-%E3%83%AD%E3%83%BC%E3%82%BA%E3%82%B4%E3%83%BC%E3%83%AB%E3%83%89/dp/B07KYHRLPC/ref=sr_1_21?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E8%85%95%E6%99%82%E8%A8%88+%E3%83%AC%E3%83%87%E3%82%A3%E3%83%BC%E3%82%B9&qid=1576461969&sr=8-21" class="card-text">[コーチ]腕時計 レディース COACH 14503117 クリーム シルバー ローズゴールド [並行輸入品]</a>
              </div>
            </div>
          </div>

          <!-- /.col-md-4 -->
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('img/wallet-coach.jpg') }}" alt="" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Wallet</h3>
                <a href="https://www.amazon.co.jp/%E3%82%B3%E3%83%BC%E3%83%81-%E3%82%A2%E3%82%A6%E3%83%88%E3%83%AC%E3%83%83%E3%83%88-COACH-F11484-%E3%82%B8%E3%83%83%E3%83%97%E3%82%A6%E3%82%A9%E3%83%AC%E3%83%83%E3%83%88/dp/B07BN8RMXN/ref=sr_1_17?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=%E8%B2%A1%E5%B8%83+%E3%83%AC%E3%83%87%E3%82%A3%E3%83%BC%E3%82%B9&qid=1576463659&sr=8-17" class="card-text">[コーチ] COACH 財布 (二つ折り財布) F54010 レザー 二つ折り財布 レディース [アウトレット品] [並行輸入品]
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="container mt-1">
            <h2>女友達へのプレゼント</h2>
            <div class="row">
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ asset('img/handcream.jpg') }}" alt="ac" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Handcream
                </h3>
                <a href="https://www.amazon.co.jp/%E3%80%90Amazon-co-jp-%E9%99%90%E5%AE%9A%E3%80%91%E3%83%AD%E3%82%AF%E3%82%B7%E3%82%BF%E3%83%B3-LOCCITANE-%E3%83%8F%E3%83%B3%E3%83%89%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%A0%E3%83%88%E3%83%AA%E3%82%AA-%E3%82%AA%E3%83%BC%E3%82%AD%E3%83%8730g%E3%80%81%E3%83%86%E3%83%BC%E3%83%AB%E3%83%89%E3%83%AB%E3%83%9F%E3%82%A8%E3%83%BC%E3%83%AB30ml%E3%80%81%E3%83%AA%E3%83%9C%E3%83%B3%E3%82%A2%E3%83%AB%E3%83%AB30ml/dp/B07SRB8KH6/ref=sr_1_3?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%8F%E3%83%B3%E3%83%89%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%A0+%E3%83%97%E3%83%AC%E3%82%BC%E3%83%B3%E3%83%88+%E3%82%BB%E3%83%83%E3%83%88&qid=1576508834&sr=8-3" class="card-text">ロクシタン(L'OCCITANE) ハンドクリームトリオ ポーチ付き(オーキデ30g、テールドルミエール30ml、リボンアルル30ml)</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ asset('img/wine.jpg') }}" alt="" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Wine</h3>
                <a href="https://www.amazon.co.jp/%E3%83%89%E3%82%A4%E3%83%84%E3%83%AF%E3%82%A4%E3%83%B3-%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%9E%E3%82%B9%E3%83%9C%E3%83%88%E3%83%AB-%E3%83%89%E3%83%AB%E3%83%B3%E3%83%95%E3%82%A7%E3%83%AB%E3%83%80%E3%83%BC%E8%B5%A4-500ml-2018%E5%B9%B4%E3%83%B4%E3%82%A1%E3%83%BC%E3%82%B8%E3%83%A7%E3%83%B3/dp/B07KPYBNF6/ref=sr_1_5?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%81%8A%E9%85%92+%E3%83%97%E3%83%AC%E3%82%BC%E3%83%B3%E3%83%88+%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%9E%E3%82%B9&qid=1576508607&sr=8-5" class="card-text">ドイツワイン クリスマスボトル ドルンフェルダー赤 500ml [2019年ヴァージョン]</a>
              </div>
            </div>
          </div>

          <!-- /.col-md-4 -->
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('img/humidifier.jpg') }}" alt="" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Fumidifier</h3>
                <a href="https://www.amazon.co.jp/Conico-8%E6%99%82%E9%96%93%E9%80%A3%E7%B6%9A%E5%8A%A0%E6%B9%BF-%E8%87%AA%E5%8B%95%E6%96%AD%E9%9B%BB%EF%BC%86%E7%A9%BA%E7%84%9A%E3%81%8D%E9%98%B2%E6%AD%A2-4%E6%99%82%E9%96%93%E8%87%AA%E5%8B%95%E5%81%9C%E6%AD%A2-PSE%E8%AA%8D%E8%A8%BC%E6%B8%88%E3%81%BF/dp/B07Z7CHF99/ref=sr_1_24?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E5%8A%A0%E6%B9%BF%E5%99%A8&qid=1576509176&sr=8-24" class="card-text">加湿器 Conico 卓上 超音波加湿器 usb 超繊細ミスト 300ml 8時間連続加湿 静音設計 二つモード 7色変換 LEDライト 自動断電＆空焚き防止 萌えペット 可愛い 癒しグッズ 乾燥/花粉症対策 ペットボトル 小型 卓上/寝室/オフィス/車載用 4時間自動停止 省エネ PSE認証済み
                </a>
              </div>
            </div>
          </div>
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


<a class="fab fa-line fa-2x" href="http://line.me/R/msg/text/?私は、インドア系男子。欲しいプレゼントは、持っているだけで、部屋での生活が豊かになるもの！みんなも診断して結果をシェアしよう！！！"></a>


    
    <a href="http://twitter.com/share?url=http://127.0.0.1:8000/bestty/result-fe2&text=テキスト内容！！！" class="fab fa-twitter fa-2x" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

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