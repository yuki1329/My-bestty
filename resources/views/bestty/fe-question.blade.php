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
    <h2>1.流行りものや新商品より、長く使えるものを好む傾向がありそうだ。</h2>
    <fieldset>
      <div class="btn-wrapper" id="#1">
          <input id="item-1" class="radio-inline__input" type="radio" name="accessible-radio" value="item-1" checked="checked"/>
          <label class="radio-inline__label" for="item-1">
              YES
          </label>
          <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio" value="item-2"/>
          <label class="radio-inline__label" for="item-2">
              NO
          </label>

    </div>
    </div><br><br>

    <div>
    <h2>2.あなたが思う相手の良い点は、落ち着いていてしっかりしている点である。</h2>
      <div class="btn-wrapper" id="#1">
          <input id="item-3" class="radio-inline__input2" type="radio" name="accessible-radio2" value="item-3" checked="checked"/>
          <label class="radio-inline__label2" for="item-3">
              YES
          </label>
          <input id="item-4" class="radio-inline__input2" type="radio" name="accessible-radio2" value="item-2"/>
          <label class="radio-inline__label2" for="item-4">
              NO
          </label>

    </div>
    </div><br><br>

    <div>
    <h2>3.比較的イベントやパーティーなどによく参加するイメージがある。</h2>
    <div class="btn-wrapper" id="#4">
      <input id="item-5" class="radio-inline__input3" type="radio" name="accessible-radio3" value="item-5" checked="checked"/>
      <label class="radio-inline__label3" for="item-5">
          YES
      </label>
      <input id="item-6" class="radio-inline__input3" type="radio" name="accessible-radio3" value="item-6"/>
      <label class="radio-inline__label3" for="item-6">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>4.ファッションや持ち物にこだわりが強そうなイメージがある。</h2>
    <div class="btn-wrapper" id="#5">
      <input id="item-7" class="radio-inline__input4" type="radio" name="accessible-radio4" value="item-7" checked="checked"/>
      <label class="radio-inline__label4" for="item-7">
          YES
      </label>
      <input id="item-8" class="radio-inline__input4" type="radio" name="accessible-radio4" value="item-8"/>
      <label class="radio-inline__label4" for="item-8">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>5.周りからよく変わっていると言われるタイプの人である。</h2>
    <div class="btn-wrapper" id="#6">
      <input id="item-9" class="radio-inline__input5" type="radio" name="accessible-radio5" value="item-9" checked="checked"/>
      <label class="radio-inline__label5" for="item-9">
          YES
      </label>
      <input id="item-10" class="radio-inline__input5" type="radio" name="accessible-radio5" value="item-10"/>
      <label class="radio-inline__label5" for="item-10">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>6.結構、盛り気味に（大げさに）ものを言っていそうなイメージがある。</h2>
    <div class="btn-wrapper" id="#7">
      <input id="item-11" class="radio-inline__input6" type="radio" name="accessible-radio6" value="item-11" checked="checked"/>
      <label class="radio-inline__label6" for="item-11">
          YES
      </label>
      <input id="item-12" class="radio-inline__input6" type="radio" name="accessible-radio6" value="item-12"/>
      <label class="radio-inline__label6" for="item-12">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>7.比較的休日は部屋にいることが多そうである。</h2>
    <div class="btn-wrapper" id="#8">
      <input id="item-13" class="radio-inline__input7" type="radio" name="accessible-radio7" value="item-13" checked="checked"/>
      <label class="radio-inline__label7" for="item-13">
          YES
      </label>
      <input id="item-14" class="radio-inline__input7" type="radio" name="accessible-radio7" value="item-14"/>
      <label class="radio-inline__label7" for="item-14">
          NO
      </label>

    </div>
    </div><br><br>

    <div>
    <h2>8.仕事場の先輩などの、年上とも人づきあいが良さそうな人である。</h2>
    <div class="btn-wrapper" id="#9">
      <input id="item-15" class="radio-inline__input8" type="radio" name="accessible-radio8" value="item-15" checked="checked"/>
      <label class="radio-inline__label8" for="item-15">
          YES
      </label>
      <input id="item-16" class="radio-inline__input8" type="radio" name="accessible-radio8" value="item-16"/>
      <label class="radio-inline__label8" for="item-16">
          NO
      </label>

    </div>
  </div><br><br>

      <div>
        <h2>9.バラエティ番組や連続ドラマを比較的好むイメージがある。</h2>
          <div class="btn-wrapper" id="#1">
              <input id="item-17" class="radio-inline__input9" type="radio" name="accessible-radio9" value="item-17" checked="checked"/>
              <label class="radio-inline__label9" for="item-17">
                  YES
              </label>
              <input id="item-18" class="radio-inline__input9" type="radio" name="accessible-radio9" value="item-18"/>
              <label class="radio-inline__label9" for="item-18">
                  NO
              </label>
    
        </div>
        </div>
  

    {{-- 結果ボタン --}}
    <div class="text-center question-result-btn">
    <a href="{{ route('bestty.result') }}" method="GET"><input type="button" value="結果"></a>
    
</div>
</fieldset>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
</body>
</html>