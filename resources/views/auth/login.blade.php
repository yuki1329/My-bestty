<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>RESULT</title>
</head>
<body>
{{-- ヘッダー --}}
<header class="site-header">
        <h2 class="header-character"> BESTTY</h2>
</header>
    <div class="menu2">
        <div class="menuWrapper">
          <span class="menuBtn">
          </span>
          </div>
          <ul id="menu">
            <li><a href="#">診断をやめる</a></li>
            <li><a href="#">使い方</a></li>
            <li><a href="#">ちんちん</a></li>
          </ul>
    </div><br><br><br><br><br>

{{-- 内容 --}}
<div class="result-all">
  <div id="result-img">
  <h1>あなたがプレゼントしたい人のタイプは・・・・</h1>
      <img src="{{ asset('img/logo.jpg') }}" alt="結果画面の画像" >
      <h1>野球好き系女子</h1>
  </div>
      <div>
        <ul>
          <li class="result-flex-item-name">コスメ</li>
          <li class="result-flex-item-name">アクセサリー</li>
          <li class="result-flex-item-name">洋服</li>
        </ul>
      </div>
      <div>
        <ul class="">
          <li class="result-flex-img"><img src="{{ asset('img/youhuku.jpeg') }}" alt="コスメ"></li>
          <li class="result-flex-img"><img src="{{ asset('img/youhuku.jpeg') }}" alt="アクセサリー"></li>
          <li class="result-flex-img"><img src="{{ asset('img/youhuku.jpeg') }}" alt="洋服"></li>
        </ul>
      </div>
      <div>
        <ul class="result-item-brand1">
          <li>コスメ</li>
          <li>アクセサリー</li>
          <li>洋服</li>
        </ul>
        <ul class="result-item-brand2">
          <li>コスメ</li>
          <li>アクセサリー</li>
          <li>洋服</li>
        </ul>
        <ul class="result-item-brand3">
          <li>コスメ</li>
          <li>アクセサリー</li>
          <li>洋服</li>
        </ul>
      </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
</body>
</html>