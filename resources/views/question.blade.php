







<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>QUESTION</title>
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
          <li><a href="#">診断をやめる</a></li>
          <li><a href="#">使い方</a></li>
          <li><a href="#">ちんちん</a></li>
        </ul>
      </div>
      
<!-- 内容 -->
<div class="body-all">
    <div>
    <h2>1.ものを選ぶ基準はデザインより機能性だ</h2>
      <div class="btn-wrapper" id="#1">
      <input type="radio" class="btn js-scroll">YES</a>
      <input type="radio" class="btn js-scroll">NO</a>
    </div>
    </div><br><br>

    <div>
    <h2>2.あなたが思う相手の良い点は、落ち着いていて知的なところである</h2>
      <div class="btn-wrapper" id="#2">
      <input type="radio" class="btn js-scroll">YES</a>
      <input type="radio" class="btn js-scroll">NO</a>
    </div>
    </div><br><br>

    <div>
    <h2>3.何事にもひとつひとつ丁寧に行う</h2>
    <div class="btn-wrapper" id="#3">
      <input type="radio" class="btn js-scroll">YES</a>
      <input type="radio" class="btn js-scroll">NO</a>
    </div>
    </div><br><br>

    <div>
    <h2>4.休日は比較的に部屋にいる</h2>
    <div class="btn-wrapper" id="#4">
      <input type="radio" class="btn js-scroll">YES</a>
      <input type="radio" class="btn js-scroll">NO</a>
    </div>
    </div><br><br>

    <div>
    <h2>5.旅行や初めての場所に行く前に徹底的に下調べをしてそうな人だ</h2>
    <div class="btn-wrapper" id="#5">
      <input type="radio" class="btn js-scroll">YES</a>
      <input type="radio" class="btn js-scroll">NO</a>
    </div>
    </div><br><br>

    <div>
    <h2>6.時間はきっちりと守るほうだ</h2>
    <div class="btn-wrapper" id="#6">
      <input type="radio" class="btn js-scroll">YES</a>
      <input type="radio" class="btn js-scroll">NO</a>
    </div>
    </div><br><br>

    <div>
    <h2>7.多分ニュース番組よりバラエティ番組のほうが好きそうに見える</h2>
    <div class="btn-wrapper" id="#7">
    <input type="radio" class="btn js-scroll">YES</a>
      <input type="radio" class="btn js-scroll">NO</a>
    </div>
    </div><br><br>

    <div>
    <h2>8.結構、実際の出来事より控えめだったり、多くを語らないイメージがある</h2>
    <div class="btn-wrapper" id="#8">
    <input type="radio" class="btn js-scroll">YES</a>
      <input type="radio" class="btn js-scroll">NO</a>
    </div>
    </div><br><br>

    <div>
    <h2>9.一緒に住んだら家事をしてくれそうだ</h2>
    <div class="btn-wrapper" id="#9">
    <input type="radio" class="btn js-scroll">YES</a>
    <input type="radio" class="btn js-scroll">NO</a>
  </div>
    </div><br>
    
    <div>
    <input type="button" value="結果">
  </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
</body>
</html>