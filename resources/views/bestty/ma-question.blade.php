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
  <h2 class="question-ex">プレゼントを贈りたい相手をイメージして答えよう！</h2>
    <form action="{{ route('bestty.resultMa') }}" method="POST" id="questionMa">
    @csrf
    @foreach ($male_questions as $male_question)
    <fieldset class="question-all">
    <div class="border border-secondary questions">
      <p class="question">{{$male_question->body}}</p>
      <div class="btn-wrapper">
            <input type="radio" name="question-{{$male_question->id}}" value="yes"  required/>
            <label for="yes" class="question">
                YES 
            </label>
            <input type="radio" name="question-{{$male_question->id}}" value="no"/>
            <label for="no" class="question">
                NO
            </label>
     </div>
    </div>
    </fieldset>
    @endforeach


    {{-- 結果ボタン --}}
    <div class="text-center question-result-btn">
        <input type="submit" value="Check result!" class="motherFucker button">

    </div>
    <div class="tohokuret"></div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
</body>
</html>