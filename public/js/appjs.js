
// ハンバーガーメニューの作成

$('.menuWrapper').on('click', function(){
  // テキストの入れ替え
  let text = 'menu';
  if($(this).hasClass('on')){
    text = 'menu';
  }else{
    text = 'close';
  }
  $(this).toggleClass('on').find('.menuBtn').text(text);
});


// スクロールの作成


  // $(function(){
  //   // #で始まるアンカーをクリックした場合に処理
  //   $('.s_01 a[href^=#]').click(function(){
  //     // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
  //     var adjust = 0;
  //     // スクロールの速度
  //     var speed = 400; // ミリ秒
  //     // アンカーの値取得
  //     var href= $(this).attr("href");
  //     // 移動先を取得
  //     var target = $(href == "#" || href == "" ? 'html' : href);
  //     // 移動先を調整
  //     var position = target.offset().top + adjust;
  //     // スムーススクロール
  //     $('body,html').animate({scrollTop:position}, speed, 'swing');
  //     return false;
  //   });
  // });


  jQuery(document).ready(function($){
    $("input").each(function(index, element) {
 
        element.addEventListener("invalid", function(e) {
            if(element.validity.valueMissing){
                e.target.setCustomValidity("この項目は入力必須です。");
            } else {
                e.target.setCustomValidity("");
                e.preventDefault();
            }
        });
    });
});