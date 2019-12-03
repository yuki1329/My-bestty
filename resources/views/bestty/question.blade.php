







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
        <li><a href="{{ route('bestty.index') }}" method="GET">診断をやめる</a></li>
        <li><a href="{{ route('bestty.howto') }}" method="GET">使い方</a></li>
        <li><a href="#">ちんちん</a></li>
      </ul>
    </div>

<!-- 内容 -->
<div class="body-all">
    <div>
    <h2>1.ものを選ぶ基準はデザインより機能性だ</h2>
    <form action="{{ route('bestty.result') }}">
    <fieldset>
      <div class="btn-wrapper" id="#1">
          <input type="radio" name="question1-yes" value="yes-1"/>
          <label for="yes-1">
              YES
          </label>
          <input type="radio" name="question1-no" value="no-1"/>
          <label for="no-1">
              NO
          </label>

    </div>
    </div><br><br>

    <div>
    <h2>2.あなたが思う相手の良い点は、落ち着いていて知的なところである</h2>
      <div class="btn-wrapper" id="#1">
          <input type="radio" name="question2-yes" value="yes-2"/>
          <label for="yes-2">
              YES
          </label>
          <input type="radio" name="question2-no" value="no-2"/>
          <label class="radio-inline__label2" for="no-2">
              NO
          </label>

    </div>
    </div><br><br>

    <div>
    <h2>3.休日は比較的に部屋にいる</h2>
    <div class="btn-wrapper" id="#4">
      <input type="radio" name="question3-yes" value="yes-3"/>
      <label for="yes-3">
          YES
      </label>
      <input type="radio" name="question3-no" value="no-3"/>
      <label for="no-3">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>4.旅行や初めての場所に行く前に徹底的に下調べをしてそうな人だ</h2>
    <div class="btn-wrapper" id="#5">
      <input type="radio" name="question4-yes" value="yes-4"/>
      <label for="yes-4">
          YES
      </label>
      <input type="radio" name="question4-no" value="no-4"/>
      <label for="no-4">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>5.時間はきっちりと守るほうだ</h2>
    <div class="btn-wrapper" id="#6">
      <input type="radio" name="question5-yes" value="yes-5">
      <label for="yes-5">
          YES
      </label>
      <input type="radio" name="question5-no" value="no-5"/>
      <label for="no-5">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>6.多分ニュース番組よりバラエティ番組のほうが好きそうに見える</h2>
    <div class="btn-wrapper" id="#7">
      <input type="radio" name="question6-yes" value="yes-6"/>
      <label for="yes-6">
          YES
      </label>
      <input type="radio" name="question6-no" value="no-6"/>
      <label for="no-6">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>7.結構、実際の出来事より控えめだったり、多くを語らないイメージがある</h2>
    <div class="btn-wrapper">
      <input type="radio" name="question7-yes" value="yes-7">
      <label for="yes-7">
          YES
      </label>
      <input type="radio" name="question7-no" value="no-7"/>
      <label for="no-7">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>8.一緒に住んだら家事をしてくれそうだ</h2>
    <div class="btn-wrapper">
      <input type="radio" name="question8-yes" value="yes-8">
      <label for="yes-8">
          YES
      </label>
      <input type="radio" name="question8-no" value="no-8"/>
      <label for="no-8">
          NO
      </label>

    </div>
  </div><br><br>

      <div>
        <h2>9.あなたが思う相手の良い点は、落ち着いていて知的なところである</h2>
          <div class="btn-wrapper">
              <input type="radio" name="question9-yes" value="yes-9"/>
              <label for="yes-9">
                  YES
              </label>
              <input type="radio" name="question9-no" value="no-9"/>
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