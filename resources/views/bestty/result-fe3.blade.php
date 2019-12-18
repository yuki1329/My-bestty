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
      <img src="{{ asset('img/kirakirajoshi.jpg') }}" class="result-img" alt="結果画面の画像" >
      <h1 class="result-text">個性派女子</h1>

  </div>
  <div class="result-ex">
    <h4>個性派女子はみんなから一目置かれる特別な存在！<br>人と違う個性的なものを好む彼女たちにはこんなものがオススメ！</h4>
  </div>
         <!-- container -->
       <div class="container mt-1">
        <h2>彼女へのプレゼント</h2>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ asset('img/camera.jpg') }}" alt="ac" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Camera
                </h3>
                <a href="https://www.amazon.co.jp/FUJIFILM-%E3%82%A4%E3%83%B3%E3%82%B9%E3%82%BF%E3%83%B3%E3%83%88%E3%82%AB%E3%83%A1%E3%83%A9-WIDE-300-INS/dp/B00OT7W7BA/ref=sr_1_20?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%81%E3%82%A7%E3%82%AD&qid=1576511289&sr=8-20" class="card-text" >FUJIFILM インスタントカメラ チェキWIDE instax WIDE 300 INS WIDE 300</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ asset('img/earrings.jpg') }}" alt="" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Earrings</h3>
                <a href="https://www.amazon.co.jp/%E3%83%B4%E3%82%A3%E3%83%B4%E3%82%A3%E3%82%A2%E3%83%B3%E3%82%A6%E3%82%A8%E3%82%B9%E3%83%88%E3%82%A6%E3%83%83%E3%83%89-Vivienne-Westwood-%E3%83%94%E3%82%A2%E3%82%B9%E3%80%90%E4%B8%A6%E8%A1%8C%E8%BC%B8%E5%85%A5%E5%93%81%E3%80%91-MT12630/dp/B00UWBPYVW?ref_=Oct_MWishedForC_7746072051_4&pf_rd_r=QWVWD93CW20AHB7Z8BE8&pf_rd_p=26b07062-1a44-557b-96ac-0b92589394a6&pf_rd_s=merchandised-search-10&pf_rd_t=101&pf_rd_i=7746072051&pf_rd_m=AN1VRQENFRJN5" class="card-text">[ヴィヴィアンウエストウッド] Vivienne Westwood MAYFAIR BAS RELIEF ピアス【並行輸入品】 MT12630/2</a>
              </div>
            </div>
          </div>

          <!-- /.col-md-4 -->
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('img/shoes.jpg') }}" alt="" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Shoes</h3>
                <a href="https://www.amazon.co.jp/VANS-SKOOL-PRO%E3%80%90%E3%83%90%E3%83%B3%E3%82%BA-%E3%82%AA%E3%83%BC%E3%83%AB%E3%83%89%E3%82%B9%E3%82%AF%E3%83%BC%E3%83%AB-%E3%83%97%E3%83%AD%E3%80%91BLACK/dp/B01N0IZSOO/ref=sr_1_37?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=23WPEWYVKIIDC&dchild=1&keywords=%E3%82%B9%E3%83%8B%E3%83%BC%E3%82%AB%E3%83%BC+%E3%83%AC%E3%83%87%E3%82%A3%E3%83%BC%E3%82%B9&qid=1576512010&sprefix=%E3%82%B9%E3%83%8B%E3%83%BC%E3%82%AB%E3%83%BC%2Caps%2C314&sr=8-37" class="card-text">VANS ヴァンズ オールドスクール プロ スニーカー メンズ バンズ OLD SKOOL PRO ブラック 黒 VN000ZD4Y28 [並行輸入品]
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
              <img src="{{ asset('img/reeddiffuser.jpg') }}" alt="ac" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Reed diffuser
                </h3>
                <a href="https://www.amazon.co.jp/Seed-Spring-%E3%83%87%E3%82%A3%E3%83%95%E3%83%A5%E3%83%BC%E3%82%B6%E3%83%BC-%E3%83%9B%E3%83%AF%E3%82%A4%E3%83%88%E3%83%A0%E3%82%B9%E3%82%AF-%E3%82%A2%E3%83%AD%E3%83%9E%E3%83%86%E3%83%A9%E3%83%94%E3%83%BC%E3%82%AA%E3%82%A4%E3%83%AB/dp/B07R6DFKXH/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1ESHVY0XNYJJ5&keywords=%E3%83%AA%E3%83%BC%E3%83%89%E3%83%87%E3%82%A3%E3%83%95%E3%83%A5%E3%83%BC%E3%82%B6%E3%83%BC&qid=1576509397&sprefix=%E3%83%AA%E3%83%BC%E3%83%89%2Caps%2C299&sr=8-1" class="card-text">Seed Spring リード ディフューザー セット ホワイトムスク リード オイル ディフューザー 寝室 リビングルーム オフィス用 アロマテラピーオイル ギフト アイデア とストレス解消 用</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ asset('img/sweets.jpg') }}" alt="" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Christmas sweets</h3>
                <a href="https://www.amazon.co.jp/%E3%81%8A%E5%AE%B6%E3%81%AE%E7%AE%B1%E5%85%A5%E3%82%8A-%E3%82%AF%E3%83%AA%E3%82%B9%E3%83%9E%E3%82%B9-%E3%83%9E%E3%82%B7%E3%83%A5%E3%83%9E%E3%83%AD-%E3%83%81%E3%83%A7%E3%82%B3%E3%83%AC%E3%83%BC%E3%83%88-%E5%80%8B%E5%8C%85%E8%A3%85/dp/B00A75A2VU/ref=sr_1_48?qid=1576510988&sr=8-48&srs=7695280051&th=1" class="card-text">お家の箱入り クリスマス マシュマロ 10個 チョコレート 入り 個包装 お菓子</a>
              </div>
            </div>
          </div>

          <!-- /.col-md-4 -->
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('img/buckethat.jpg') }}" alt="" class="card-img-top">
              <div class="card-body text-center">
                <h3 class="card-title">Bucket hat</h3>
                <a href="https://www.amazon.co.jp/%E3%82%AD%E3%83%A3%E3%83%83%E3%83%97-%E3%83%AC%E3%83%87%E3%82%A3%E3%83%BC%E3%82%B9%E3%80%90100%EF%BC%85%E7%B6%BF%E3%80%91-%E6%8A%98%E3%82%8A%E3%81%9F%E3%81%9F%E3%81%BF-%E3%83%8F%E3%83%83%E3%83%88%E3%80%81%E6%97%A5%E9%99%A4%E3%81%91-UV%E3%82%AB%E3%83%83%E3%83%88%E7%B4%AB%E5%A4%96%E7%B7%9A%E5%AF%BE%E7%AD%96/dp/B07Q573ZKK/ref=sr_1_11?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=%E3%83%90%E3%82%B1%E3%83%83%E3%83%88%E3%83%8F%E3%83%83%E3%83%88+%E3%83%AC%E3%83%87%E3%82%A3%E3%83%BC%E3%82%B9&qid=1576510535&sr=8-11" class="card-text">キャップ 帽子 ハット レディース【100％綿】 スポーツ 刺繍 漁夫帽 折りたたみ レジャー ハット、日除け UVカット紫外線対策 男女兼用
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


    
    <a href="http://twitter.com/share?url=http://127.0.0.1:8000/bestty/result-fe3&text=テキスト内容！！！" class="fab fa-twitter fa-2x" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

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