jQuery(document).ready(function ($) {
  $('<style>' +
    '.scrollTop{ display:none; z-index:50; position:fixed;' +
    'bottom:20px; left:calc(95% - 15px); width:50px; height:60px;' +
    'background:url(/img/arrow.png) 0 0 no-repeat; }' +
    '.scrollTop:hover{ background-position:0 -60px;}'
    + '</style>').appendTo('body');
  var
    speed = 550,
    $scrollTop = $('<a href="#" class="scrollTop">').appendTo('body');
  $scrollTop.click(function (e) {
    e.preventDefault();
    $('html:not(:animated),body:not(:animated)').animate({ scrollTop: 0 }, speed);
  });

  //появление
  function show_scrollTop() {
    ($(window).scrollTop() > 330) ? $scrollTop.fadeIn(700) : $scrollTop.fadeOut(700);
  }
  $(window).scroll(function () { show_scrollTop(); });
  show_scrollTop();

});