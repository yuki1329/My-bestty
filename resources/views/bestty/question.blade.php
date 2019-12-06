



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
  </header>
  <div class="menu2">
      <div class="menuWrapper">
        <span class="menuBtn">
        </span>
      </div>
      <ul id="menu">
        <li><a href="{{ route('bestty.index') }}" method="post">診断をやめる</a></li>
        <li><a href="{{ route('bestty.howto') }}" method="post">使い方</a></li>
        <li><a href="#">ちんちん</a></li>
      </ul>
    </div>

<!-- 内容 -->
<div class="body-all">
    <form action="{{ route('bestty.result') }}" method="POST">
    @csrf
    <div>
    <h2>1.ものを選ぶ基準はデザインより機能性だ</h2>
    <fieldset>
      <div class="btn-wrapper" id="#1">
          <input type="radio" name="q1" value="yes"/>
          <label for="yes-1">
              YES
          </label>
          <input type="radio" name="q1" value="no"/>
          <label for="no-1">
              NO
          </label>

    </div>
    </div><br><br>

    <div>
    <h2>2.あなたが思う相手の良い点は、落ち着いていて知的なところである</h2>
      <div class="btn-wrapper" id="#1">
          <input type="radio" name="q2" value="yes"/>
          <label for="yes-2">
              YES
          </label>
          <input type="radio" name="q2" value="no"/>
          <label class="radio-inline__label2" for="no-2">
              NO
          </label>

    </div>
    </div><br><br>

    <div>
    <h2>3.休日は比較的に部屋にいる</h2>
    <div class="btn-wrapper" id="#4">
      <input type="radio" name="q3" value="yes"/>
      <label for="yes-3">
          YES
      </label>
      <input type="radio" name="q3" value="no"/>
      <label for="no-3">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>4.旅行や初めての場所に行く前に徹底的に下調べをしてそうな人だ</h2>
    <div class="btn-wrapper" id="#5">
      <input type="radio" name="q4" value="yes"/>
      <label for="yes-4">
          YES
      </label>
      <input type="radio" name="q4" value="no"/>
      <label for="no-4">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>5.時間はきっちりと守るほうだ</h2>
    <div class="btn-wrapper" id="#6">
      <input type="radio" name="q5" value="yes">
      <label for="yes-5">
          YES
      </label>
      <input type="radio" name="q5" value="no"/>
      <label for="no-5">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>6.多分ニュース番組よりバラエティ番組のほうが好きそうに見える</h2>
    <div class="btn-wrapper" id="#7">
      <input type="radio" name="q6" value="yes"/>
      <label for="yes-6">
          YES
      </label>
      <input type="radio" name="q6" value="no"/>
      <label for="no-6">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>7.結構、実際の出来事より控えめだったり、多くを語らないイメージがある</h2>
    <div class="btn-wrapper">
      <input type="radio" name="q7" value="yes">
      <label for="yes-7">
          YES
      </label>
      <input type="radio" name="q7" value="no"/>
      <label for="no-7">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>8.一緒に住んだら家事をしてくれそうだ</h2>
    <div class="btn-wrapper">
      <input type="radio" name="q8" value="yes">
      <label for="yes-8">
          YES
      </label>
      <input type="radio" name="q8" value="no"/>
      <label for="no-8">
          NO
      </label>

    </div>
  </div><br><br>

      <div>
        <h2>9.何事にもひとつひとつ丁寧に行う</h2>
          <div class="btn-wrapper">
              <input type="radio" name="q9" value="yes"/>
              <label for="yes-9">
                  YES
              </label>
              <input type="radio" name="q9" value="no"/>
              <label for="no-9">
                  NO
              </label>

        </div>
        </div>


    {{-- 結果ボタン --}}
    <div class="text-center question-result-btn">
        <input type="submit" value="結果">

</div>
</form>
</fieldset>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
</body>
</html>