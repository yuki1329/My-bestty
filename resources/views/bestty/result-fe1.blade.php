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
      <img src="{{ asset('img/ariana.jpg') }}" class="result-img" alt="結果画面の画像" >
      <h1 class="result-text">キラキラ系女子</h1>
  </div>
  <div class="result-ex">
    <h4>キラキラ系女子はパーティーやイベントが大好き！<br>流行や人気なものに敏感な彼女たちにはこんなものがオススメ！</h4>
  </div>
        <!-- container -->
        <div class="container mt-1">
          <h2>彼女へのプレゼント</h2>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/necklace.jpg') }}" alt="ac" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">Necklace
                  </h3>
                  <a href="https://www.amazon.co.jp/EverFlawless-%E3%82%B9%E3%83%AF%E3%83%AD%E3%83%95%E3%82%B9%E3%82%AD%E3%83%BC-%E3%82%B8%E3%83%AB%E3%82%B3%E3%83%8B%E3%82%A2%E6%8E%A1%E7%94%A8-925%E7%B4%94%E9%8A%80%E8%A3%BD-%E3%82%B9%E3%83%A9%E3%82%A4%E3%83%89%E8%AA%BF%E6%95%B4%E5%BC%8F/dp/B07GSWKL5B/ref=sr_1_23?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=%E3%83%8D%E3%83%83%E3%82%AF%E3%83%AC%E3%82%B9+%E3%83%AC%E3%83%87%E3%82%A3%E3%83%BC%E3%82%B9+%E4%BA%BA%E6%B0%97&qid=1576461555&sr=8-23" class="card-text" >EverFlawless スワロフスキー レディース ネックレス アレルギー対応 プラチナ 仕上げ シルバー ベネチアン チェーン スライド調整式 45cm ラッピング</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/tickets.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">Amusement park pair ticket</h3>
                  <a href="https://www.tokyodisneyresort.jp/ticket/index.html" class="card-text">ディズニーランド公式チケット</a>
                </div>
              </div>
            </div>

            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('img/coffretset.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">Coffret set</h3>
                  <a href="https://www.amazon.co.jp/%E3%82%B3%E3%82%B9%E3%83%A1%E3%83%87%E3%82%B3%E3%83%AB%E3%83%86-%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%97-COSME-DECORTE-11%E6%9C%881%E6%97%A5%E7%99%BA%E5%A3%B2/dp/B07Y9WQPP9/ref=sr_1_34?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%82%B3%E3%83%95%E3%83%AC%E3%82%BB%E3%83%83%E3%83%88&qid=1576460631&sr=8-34" class="card-text">コスメデコルテ メイクアップ コフレ II 限定品 -COSME DECORTE- 11月1日発売
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
                <img src="{{ asset('img/flowerbox.jpg') }}" alt="ac" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">Flowerbox
                  </h3>
                  <a href="https://www.amazon.co.jp/Azurosa-%E3%82%A2%E3%82%BA%E3%83%AD%E3%83%BC%E3%82%B6-%E3%83%97%E3%83%AA%E3%82%B6%E3%83%BC%E3%83%96%E3%83%89%E3%83%95%E3%83%A9%E3%83%AF%E3%83%BC-%E3%83%95%E3%83%AC%E3%82%B0%E3%83%A9%E3%83%B3%E3%82%B9%E3%82%BD%E3%83%BC%E3%83%97-%E3%83%9F%E3%83%83%E3%82%AF%E3%82%B9%E3%82%AB%E3%83%A9%E3%83%BC/dp/B01N0AJ68S/ref=sr_1_17?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%97%E3%83%AA%E3%82%B6%E3%83%BC%E3%83%96%E3%83%89%E3%83%95%E3%83%A9%E3%83%AF%E3%83%BC&qid=1576463956&sr=8-17" class="card-text">Azurosa(アズローザ) プリザーブドフラワー ギフト ボックス 枯れない花 フレグランスソープ ミックスカラー</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/godiva.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">GODIVA chocolate</h3>
                  <a href="https://www.amazon.co.jp/GODIVA-%E3%82%B4%E3%83%87%E3%82%A3%E3%83%90-%E3%82%B4%E3%83%87%E3%82%A3%E3%83%90%EF%BC%88GODIVA%EF%BC%89%E3%83%A9%E3%83%83%E3%83%94%E3%83%B3%E3%82%B0%E3%83%81%E3%83%A7%E3%82%B3%E3%83%AC%E3%83%BC%E3%83%88-%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%9E%E3%82%B9-%E3%82%B9%E3%82%BF%E3%83%BC/dp/B01M9FULWY/ref=sr_1_26?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=2X1FIDD5M2K4O&keywords=godiva%E3%83%81%E3%83%A7%E3%82%B3%E3%83%AC%E3%83%BC%E3%83%88+%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%9E%E3%82%B9&qid=1576463767&sprefix=godiva%E3%83%81%E3%83%A7%E3%82%B3%E3%83%AC%E3%83%BC%E3%83%88%E3%80%80%2Caps%2C316&sr=8-26" class="card-text">ゴディバ（GODIVA）ラッピングチョコレート クリスマス スター 9粒</a>
                </div>
              </div>
            </div>

            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('img/bathbom.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">Bath additive</h3>
                  <a href="https://www.amazon.co.jp/BSMEAN-5RGWI15749VDIBIO49K536VAX-%E5%A4%A9%E7%84%B6%E3%83%90%E3%82%B9%E7%88%86%E5%BC%BE%E3%80%81%E6%89%8B%E4%BD%9C%E3%82%8A%E3%81%AE%E6%B3%A1%E9%A2%A8%E5%91%82%E3%82%AE%E3%83%95%E3%83%88%E3%82%BB%E3%83%83%E3%83%88%E3%80%81%E7%BE%8E%E5%AE%B9%E3%82%AE%E3%83%95%E3%83%88%E3%82%BB%E3%83%83%E3%83%88%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%9E%E3%82%B9%E3%81%AB%E3%83%90%E3%83%AC%E3%83%B3%E3%82%BF%E3%82%A4%E3%83%B3%E3%81%8A%E8%AA%95%E7%94%9F%E6%97%A5%E6%AF%8D%E3%81%AE%E6%97%A5%E8%A8%98%E5%BF%B5%E6%97%A5/dp/B082F5HVQC/ref=sr_1_96?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E5%85%A5%E6%B5%B4%E5%89%A4+%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%9E%E3%82%B9&qid=1576466815&sr=8-96" class="card-text">BSMEAN 天然バス爆弾、手作りの泡風呂ギフトセット、美容ギフトセットクリスマスにバレンタインお誕生日母の日記念日
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


    
    <a href="http://twitter.com/share?url=http://127.0.0.1:8000/bestty/result-fe1&text=テキスト内容！！！" class="fab fa-twitter fa-2x" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

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