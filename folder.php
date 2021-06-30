<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > Фотогалерея > </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->

  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_video_slice.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="css/folder.css">

  <!-- собственные стили в приоритете  -->
</head>

<body>

  <?php
  include('elements/nav.php');
  $folder = $_GET['folder']; // текущая папка
  $order = $_GET['order'];   // порядок фото (-1 - обратный, иначе - прямой)

  if(empty($folder)) {header('Refresh: 0; URL="/gallery.php"');;}
  $name = 'Фотогалерея → <br> <b>' . $folder . ' →</b>';
  $text = require './elements/video_slader.php';
  $output  = str_replace('NAME', $name, $text); 
  // меняем(что, на что, где)
  echo $output;
  
  echo
  '<a href="/gallery.php" class="btn-back">
    <span><b>Назад...</b></span>
  </a>';

  function myscandir($dir, $sort = 0, $order = 0)
  {
    $list = scandir($dir, $sort);
    // если директории не существует
    if (!$list) return false;
    // удаляем . и .. 
    foreach ($list as $el) {
      if ($rest = substr($el, -4) != ".php" && $el != ".." && $el != ".") {
        $mass[] = $el;
      }
    }
    if(!empty($mass))
    {
      if ($order == "-1") rsort($mass);
      else sort($mass);
    }
    if(!empty($mass)) return $mass;
    else return 0;
  }
  $dir = './admin/gallery/' . $folder; // папка, в которой хранятся папки с изображениями для галереи
  $files = myscandir($dir, 1, $order); // получаем список файлов без . и .. и без файлов .php

  if ($files != 0) {
    $n = count($files);
    /* изменить порядок фото */
    if ($order != "-1") {
      $new_path = '/folder.php?folder=' . $folder . '&order=-1';
      $new_text = 'Показать в обратном порядке';
    } else {
      $new_path = '/folder.php?folder=' . $folder . '&order=0';
      $new_text = 'Показать в прямом порядке';
    }
    echo '<span class="count_photo"><b> ' . $n . ' фотографий </b></span>';
    echo '<a href="' . $new_path . '" class="btn-change_order">
  <span ><b><i class="fa fa-refresh" aria-hidden="true"> </i>
     Изменить порядок <br>(' . $new_text . ')</b></span>
  </a>';
  } else {
    $n = 0;
    echo '<div class="error"> Фото в данный альбом ещё не были добавлены! 😞😢😞 </div>';
  }


  echo '<div class="container_gallery">';
  for ($i = 0; $i < $n; $i++) {
    echo
    '<div class="cssbox">
    <a id="' . $files[$i] . '" href="#' . $files[$i] . '">
    <img class="cssbox_thumb" src="/admin/gallery/' . $folder . '/' . $files[$i] . '" height="320" width="320">
      <span class="cssbox_full"><img src="/admin/gallery/' . $folder . '/' . $files[$i] . '"></span>
    </a>
    <a class="cssbox_close" href="#"></a>';
    if ($i != 0) {
      echo '<a class="cssbox_prev" href="#' . $files[$i - 1] . '">&lt;</a>';
    }
    if ($i != $n - 1) {
      echo '<a class="cssbox_next" href="#' . $files[$i + 1] . '">&gt;</a>';
    }
    echo '</div>';
  }
  echo '</div>';

  include('./elements/footer.php');
  ?>

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-46156385-1', 'cssscript.com');
    ga('send', 'pageview');
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <!-- изменяем тему сайта -->
  <script type='text/javascript' src='js/ChangeTheme.js'></script>
  <script type='text/javascript' src='js/Menu.js'></script>
  <!-- разные пользовательские функции -->
  <script type='text/javascript' src='js/MyFunctions.js'></script>
</body>

</html>