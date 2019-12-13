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
      <h1 class="result-text">インドア系派男子</h1>
  </div>
  <div class="result-ex">
    <h4>インドア系男子は部屋が大好き！<br>流行や人気なものに敏感な彼らはこんなものがオススメ！</h4>
  </div>
        <!-- container -->
        <div class="container mt-1">
          <h3>彼氏へ</h3>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/pajama.jpg') }}" alt="ac" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">
                  </h5>
                  <p class="card-text">パジャマ屋 IZUMM</p>
                  <a href="https://www.amazon.co.jp/dp/B07XCT8JQ1?aaxitk=S0mm1te-C8TBf2ovBbGvKg&pd_rd_i=B07XCT8JQ1&pf_rd_p=210d08a4-6fa3-4afe-bde7-da0a404c7847&hsa_cr_id=9230245590703&sb-ci-n=asinImage&sb-ci-v=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F512eyBzpEAL.jpg&sb-ci-a=B07XCT8JQ1" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/kasituki.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">Proscenic 807C加湿器</p>
                  <a href="https://www.amazon.co.jp/Proscenic-807C%E5%8A%A0%E6%B9%BF%E5%99%A8-5-5L%E5%A4%A7%E5%AE%B9%E9%87%8F%E5%8A%A0%E6%B9%BF%E5%99%A8-%E3%83%97%E3%83%A9%E3%82%BA%E3%83%9E%E3%82%AF%E3%83%A9%E3%82%B9%E3%82%BF%E3%83%BC-30%E6%99%82%E9%96%93%E9%80%A3%E7%B6%9A%E7%A8%BC%E5%83%8D/dp/B07NHW2N85/ref=sr_1_53?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E5%8A%A0%E6%B9%BF%E5%99%A8&qid=1576201177&sr=8-53" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>

            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('img/oto.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">SONY SRS-XB21
                  </p>
                  <a href="https://www.amazon.co.jp/%E3%82%BD%E3%83%8B%E3%83%BC-SONY-%E3%83%AF%E3%82%A4%E3%83%A4%E3%83%AC%E3%82%B9%E3%83%9D%E3%83%BC%E3%82%BF%E3%83%96%E3%83%AB%E3%82%B9%E3%83%94%E3%83%BC%E3%82%AB%E3%83%BC-SRS-XB21-%E5%B0%82%E7%94%A8%E3%82%B9%E3%83%9E%E3%83%9B%E3%82%A2%E3%83%97%E3%83%AA%E5%AF%BE%E5%BF%9C/dp/B07C7KVPTK/ref=sr_1_9?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=SONY+SRS-XB32&qid=1576205727&sr=8-9" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
        ​
          </div>
        </div>


        <div class="container mt-1">
            <h3>友達へ</h3>
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="{{ asset('img/hati.jpg') }}" alt="ac" class="card-img-top">
                  <div class="card-body text-center">
                    <h3 class="card-title">
                    </h5>
                    <p class="card-text">ヒメモンステラ6号鉢</p>
                    <a href="https://www.amazon.co.jp/%EF%BC%BB%E8%A6%B3%E8%91%89%E6%A4%8D%E7%89%A9%E3%81%AE%E5%B0%82%E9%96%80%E5%BA%97-%E5%BD%A9%E6%A4%8D%E5%81%A5%E7%BE%8E%EF%BC%BD-%E3%80%90%E3%83%96%E3%83%A9%E3%82%A6%E3%83%B3%E9%89%A2%E3%82%AB%E3%83%90%E3%83%BC%E4%BB%98%E3%80%91%E3%83%92%E3%83%A1%E3%83%A2%E3%83%B3%E3%82%B9%E3%83%86%E3%83%A96%E5%8F%B7%E9%89%A2/dp/B002LP2YI8/ref=sr_1_2?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%92%E3%83%A1%E3%83%A2%E3%83%B3%E3%82%B9%E3%83%86%E3%83%A9&qid=1576201790&sr=8-2" class="btn btn-outline-info btn-sm">detail</a>
                  </div>
                </div>
              </div>
              <!-- /.col-md-4 -->
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="{{ asset('img/sol.jpg') }}" alt="" class="card-img-top">
                  <div class="card-body text-center">
                    <h3 class="card-title"></h5>
                    <p class="card-text">サボン バスソルト</p>
                    <a href="https://www.amazon.co.jp/SABON-%E3%82%B5%E3%83%9C%E3%83%B3-%E3%83%90%E3%82%B9%E3%82%BD%E3%83%AB%E3%83%88-%E3%83%AD%E3%83%BC%E3%82%BA350g-%E4%B8%A6%E8%A1%8C%E8%BC%B8%E5%85%A5%E5%93%81/dp/B07K343LSJ/ref=sr_1_3?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1DJF1VO96UOT7&keywords=%E3%82%B5%E3%83%9C%E3%83%B3+%E3%83%90%E3%82%B9%E3%82%BD%E3%83%AB%E3%83%88&qid=1576207076&sprefix=sabon+bas%2Caps%2C491&sr=8-3" class="btn btn-outline-info btn-sm">detail</a>
                  </div>
                </div>
              </div>
  
              <!-- /.col-md-4 -->
              <div class="col-md-4">
                <div class="card">
                  <img src="{{ asset('img/makura.jpg') }}" alt="" class="card-img-top">
                  <div class="card-body text-center">
                    <h3 class="card-title"></h5>
                    <p class="card-text">ビーズクッション フロアクッション
                    </p>
                    <a href="https://www.amazon.co.jp/%E3%83%95%E3%83%AC%E3%83%83%E3%82%AF%E3%82%B9%E8%B2%A9%E5%A3%B2-Flex-PFC-6312AW-%E3%83%93%E3%83%BC%E3%82%BA%E3%82%AF%E3%83%83%E3%82%B7%E3%83%A7%E3%83%B3-%E3%82%A2%E3%83%BC%E3%82%B9%E3%82%AB%E3%83%A9%E3%83%BC%E3%83%95%E3%83%AD%E3%82%A2%E3%82%AF%E3%83%83%E3%82%B7%E3%83%A7%E3%83%B3/dp/B0083F93CU/ref=sr_1_6?qid=1576207370&refinements=p_n_price_fma%3A401051011&s=home&sr=1-6" class="btn btn-outline-info btn-sm">detail</a>
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


<a class="fab fa-line fa-2x" href="http://line.me/R/msg/text/?私は、インドア系男子。欲しいプレゼントは、持っているだけで、部屋での生活が豊かになるもの！みんなも診断して結果をシェアしよう！！！"></a>


    
    <a href="http://twitter.com/share?url=http://127.0.0.1:8000/bestty/result-ma3&text=私は、インドア系男子。欲しいプレゼントは、持っているだけで、部屋での生活が豊かになるもの！みんなも診断して結果をシェアしよう！！！" class="fab fa-twitter fa-2x" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

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