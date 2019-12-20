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
    </ul>
  </div>

{{-- 内容 --}}
<div class="result-all">
  <div id="result-top">
  <h1>The type of person you want to give・・・・</h1>
      <img src="{{ asset('img/R-ryousuke.jpg') }}" class="result-img" alt="結果画面の画像" >
      <h1 class="result-text">Party People</h1>
  </div>
  <div class="result-ex">
    <h2>Party People loves party!</h2>
  </div>
        <!-- container -->
        <div class="container mt-1">
          <h2>彼氏へ</h2>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/ray.jpg') }}" alt="ac" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">
                  </h5>
                  <p class="card-text">レイバン WAYFARER</p>
                  <a href="#" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/saihu.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">PORTER コインケース</p>
                  <a href="https://www.amazon.co.jp/%E3%83%9D%E3%83%BC%E3%82%BF%E3%83%BC-PORTER-CURRENT-%E3%82%B3%E3%82%A4%E3%83%B3%E3%82%B1%E3%83%BC%E3%82%B9-052-02205/dp/B008DRIR4I/ref=sr_1_3?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&creative=6339&dchild=1&keywords=052-02205&linkCode=ure&qid=1576119775&sr=8-3" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>

            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('img/card.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">IL BISONTE カードケース
                  </p>
                  <a href="https://www.amazon.co.jp/%E3%82%A4%E3%83%AB%E3%83%93%E3%82%BE%E3%83%B3%E3%83%86-BISONTE-%E3%82%AD%E3%83%BC%E3%83%AA%E3%83%B3%E3%82%B0%E4%BB%98%E3%81%8D-VACCHETTA-%E3%80%90135%E3%83%BB153%E3%80%91%E3%83%96%E3%83%A9%E3%83%83%E3%82%AF%EF%BC%9A%E3%82%B4%E3%83%BC%E3%83%AB%E3%83%89%E9%87%91%E5%85%B7/dp/B073QTY3HD/ref=sr_1_6?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=%E3%82%A4%E3%83%AB%E3%83%93%E3%82%BE%E3%83%B3%E3%83%86+%E3%82%AD%E3%83%BC%E3%82%B1%E3%83%BC%E3%82%B9&qid=1576121806&s=apparel&sr=1-6" class="btn btn-outline-info btn-sm">detail</a>
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
                <img src="{{ asset('img/kutusita.jpg') }}" alt="ac" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title">
                  </h5>
                  <p class="card-text">Paul Smith 靴下 </p>
                  <a href="https://www.amazon.co.jp/Paul-Smith-%E3%83%9D%E3%83%BC%E3%83%AB%E3%83%BB%E3%82%B9%E3%83%9F%E3%82%B9-%E3%82%AB%E3%82%B8%E3%83%A5%E3%82%A2%E3%83%AB%E3%82%BD%E3%83%83%E3%82%AF%E3%82%B9-M1ASOCK-PACK-79/dp/B07HNMYSZQ/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&dchild=1&keywords=%E3%83%9D%E3%83%BC%E3%83%AB%E3%82%B9%E3%83%9F%E3%82%B9+%E9%9D%B4%E4%B8%8B&qid=1576148478&sr=8-1" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="{{ asset('img/cup.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">サーモス 真空断熱マグカップ ホワイト</p>
                  <a href="https://www.amazon.co.jp/%E3%82%B5%E3%83%BC%E3%83%A2%E3%82%B9-%E7%9C%9F%E7%A9%BA%E6%96%AD%E7%86%B1%E3%83%9E%E3%82%B0%E3%82%AB%E3%83%83%E3%83%97-350ml-JDG-350C-BK/dp/B07VCCCPYR/ref=sr_1_14?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%82%B5%E3%83%BC%E3%83%A2%E3%82%B9(THERMOS)&qid=1576150812&sr=8-14&th=1" class="btn btn-outline-info btn-sm">detail</a>
                </div>
              </div>
            </div>

            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('img/iyahon.jpg') }}" alt="" class="card-img-top">
                <div class="card-body text-center">
                  <h3 class="card-title"></h5>
                  <p class="card-text">final E2000
                  </p>
                  <a href="https://www.amazon.co.jp/dp/B072J4C754?aaxitk=ixdInSpfQgbU0hc27u-ktw&pd_rd_i=B072J4C754&pf_rd_p=1b1511df-b525-4a74-b79c-c8395c81af7d&hsa_cr_id=4023711350903&sb-ci-n=asinImage&sb-ci-v=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F71E5fv7QssL.jpg&sb-ci-a=B072J4C754" class="btn btn-outline-info btn-sm">detail</a>
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


<a class="fab fa-line fa-2x" href="http://line.me/R/msg/text/?私は、イケイケ系男子。欲しいプレゼントは、流行をとらえているセンスのあるモノ！みんなも診断して結果をシェアしよう！！！"></a>


    
    <a href="http://twitter.com/share?url=http://127.0.0.1:8000/bestty/result-ma2&text=私は、イケイケ系男子。欲しいプレゼントは、流行をとらえているセンスのあるモノ！みんなも診断して結果をシェアしよう！！！" class="fab fa-twitter fa-2x" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

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