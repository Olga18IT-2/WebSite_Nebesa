<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > Фотогалерея</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" href="css/style_video_slice.css">
  <link rel="stylesheet" href="css/gallery.css">
  
  <!-- собственные стили в приоритете  -->
  <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/js/Arrow.js"></script>
</head>

<body>
  <?php
  include('elements/nav.php');
  $name = 'Фотогалерея :';
  $text = require './elements/video_slader.php';
  $output  = str_replace('NAME', $name, $text);
  // меняем(что, на что, где)
  echo $output;

  function sort_date($a_new, $b_new)
  {
    $a_new = strtotime($a_new["date"]);
    $b_new = strtotime($b_new["date"]);
    return $b_new - $a_new;
  }
  function myscandir($dir, $sort = 0)
  {
    $list = scandir($dir, $sort);
    // если директории не существует
    if (!$list) return false;
    // удаляем . и ..
    if ($sort == 0) unset($list[0], $list[1]);
    else unset($list[count($list) - 1], $list[count($list) - 1]);
    /*01.02.2020 .............*/
    foreach ($list as $el) {
      if ($rest = substr($el, -4) != ".php") {
        $mass[] = array("name" => $el, "date" => substr($el, 0, 10));
      }
    }
    usort($mass, "sort_date");
    return $mass;
  }
  $dir = './admin/gallery'; // папка, в которой хранятся папки с изображениями для галереи
  $files = myscandir($dir, 1); // получаем список файлов без . и .. и без файлов .php

  echo ' <div class="container_gallery">';
  $i = 1;
  if (!empty($files)) {
    foreach ($files as $el_now) {
      echo '<a href="/folder.php?folder=' . $el_now["name"] . '" 
    class="container_folder" style="background-image:url(/img/folder_' . ($i % 9 + 1) . '.png);">';
      echo '<div class="container_name_folder"> <b>' . substr($el_now["name"], 10) . '</b> </div>';
      echo '<div class="container_date_folder">' . $el_now["date"] . '</div>';
      echo '</a>';
      $i++;
    }
  }
  echo '</div>';

  include('./elements/footer.php');
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <!-- изменяем тему сайта -->
  <script type='text/javascript' src='js/ChangeTheme.js'></script>
  <script type='text/javascript' src='js/Menu.js'></script>
  <!-- разные пользовательские функции -->
  <script type='text/javascript' src='js/MyFunctions.js'></script>
</body>
</html>