$(document).ready(function() {
  $('.drawer').drawer();
});



$(document).ready(function(){
	if (window.matchMedia('(min-width: 768px)').matches) {
    $(document).ready(function(){

      $(".drawer").hide();
      $(function () {
          $(window).scroll(function () {
              if ($(this).scrollTop() > 100) { //この数値で何pxスクロールしたらアイコンが現れるかを設定
                  $('.drawer').fadeIn();
              } else {
                  $('.drawer').stop().fadeOut();
              }
          });
         //$('#back-top a').click(function () {
         //    $('body,html').animate({
         //        scrollTop: 0  //戻る位置
         //    }, 600); //トップへ戻る速さを設定。数値が小さいほどスピードアップ。
         //    return false;
         //});
      });
    });
    
	}
});



$(document).ready(function(){
	if (window.matchMedia('(max-width: 767px)').matches) {

var $slide = $(".slide")
  .slick({
    fade: true,    // fedeオン
    speed: 1500,   // 画像切り替えにかかる時間（ミリ秒）
    autoplaySpeed: 3000,   // 自動スライド切り替え速度
    arrows: true,         // 矢印表示・非表示
    autoplay: true,        // 自動再生
    slidesToShow: 1,       // スライド表示数
    slidesToScroll: 1,     // スライドする数
    infinite: true         // 無限リピート オン・オフ
  });

}
});



// document.querySelectorAllでli要素を全て取得する。
let contents = document.querySelectorAll('.news__item-title');
// liは2つあるのでcontentsという変数に格納しました。

// contentsをforEachで一つずつ取得、引数が一つの場合は()を省略できる。(content) => {}の()を省略している。
contents.forEach(content => {
  content.textContent = omittedContent(content.textContent);
  // content.textContentで文字列を取得できる（loop1回目の場合は"テストの文章1です"が入っている)
});

// 引数でcontent.textContentをstringという変数名で受け取る。
function omittedContent(string) {
  // 定数で宣言
  const MAX_LENGTH = 53;

  // もしstringの文字数がMAX_LENGTH（今回は10）より大きかったら末尾に...を付け足して返す。
  if (string.length > MAX_LENGTH) {

    // substr(何文字目からスタートするか, 最大値);
    return string.substr(0, MAX_LENGTH) + '...';
  }
  //　文字数がオーバーしていなければそのまま返す
  return string;
}


$(document).ready(function(){
	if (window.matchMedia('(min-width: 768px)').matches) {

$('.slider').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    speed: 500,//スライドのスピード。初期値は300。
    slidesToShow: 3,//スライドを画面に3枚見せる
    slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
    prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
    centerMode: true,//要素を中央ぞろえにする
    variableWidth: true,//幅の違う画像の高さを揃えて表示
    dots: false,//下部ドットナビゲーションの表示
});

}
});