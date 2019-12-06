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
    <form action="{{ route('bestty.result-fe1') }}" method="POST">
        @csrf
            @foreach ($female_questions as $female_question)
            <fieldset>
            <div class="m-4 p-4 border border-primary">
              <p>{{$female_question->body}}</p>
              <div class="btn-wrapper">
                    <input type="radio" name="question-{{$female_question->id}}" value="yes"/>
                    <label for="yes">
                        YES
                    </label>
                    <input type="radio" name="question-{{$female_question->id}}" value="no"/>
                    <label for="no">
                        NO
                    </label>
             </div>
            </div>
            </fieldset>
            @endforeach
            <div class="text-center question-result-btn">
                <input type="button" value="結果">
</div>
</fieldset>
</div>
</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
</body>
</html>