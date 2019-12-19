<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>QUESTION</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
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
        </ul>
      </div>

<!-- 内容 -->
<div class="body-all">
    <h2 class="question-ex">Let's answer the image of the person you want to give a present!</h2>
    <form action="{{ route('bestty.resultFe') }}" method="POST" id="questionFe">
    @csrf
        @foreach ($female_questions as $female_question)
        <fieldset class="question-all" id="q-box-{{$female_question->id}}">
        <div class="border border-secondary questions">
          <p class="question">{{$female_question->body}}</p>

          <div class="btn-wrapper">
            <div class="question-yes radio-btn" id="{{$female_question->id}}">
                <input type="radio" name="question-{{$female_question->id}}" value="yes" id="question-{{$female_question->id}}" class="question-yes" required/>
                <label for="question-{{$female_question->id}}">
                    YES
                </label>
            </div>
            <div class="question-no radio-btn" id="{{$female_question->id}}">
                <input type="radio" name="question-{{$female_question->id}}" value="no" id="questions-{{$female_question->id}}" class="question-no"/>
                <label for="questions-{{$female_question->id}}">
                    NO
                </label>
            </div>
          </div>
        </div>
        </fieldset>
        @endforeach
        <div class="text-center question-result-btn">
          <input type="submit" value="Check result!" class="button motherFucker" name="result">
        </div>
        <div class="tohokuret"></div>
    </form>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="{{ asset('js/appjs.js') }}"></script>
</body>
</html>