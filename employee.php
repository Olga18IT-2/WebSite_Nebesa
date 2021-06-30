<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > Наши сотрудники</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_video_slice.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" href="css/employye.css">
  <!-- собственные стили в приоритете  -->
  <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/js/Arrow.js"></script>
</head>

<body>

  <?php
  include('elements/nav.php');
  
  $name = 'Наши сотрудники :';
  $text = require './elements/video_slader.php';
  $output  = str_replace('NAME', $name, $text); 
  // меняем(что, на что, где)
  echo $output;

  $empl_1 = require './admin/info/empl.php';
  echo ' <div class="container_empl">';
  foreach ($empl_1 as $empl_now) {
    $path="./admin/img/empl/liderships/".$empl_now["img"];
    echo '<div class="member"> 
    <a class="image_member" alt="'.$empl_now["words"].'">
      <img src="'.$path.'" alt=""></img>
   </a>
    <div class="name_member">
    <strong>' . $empl_now["name"] . '</strong>
    </div>
    <div class="empl_member">' . $empl_now["employee"] . '</div>
    <div class="contact_member">';
    if ($empl_now["phone"] != null && $empl_now["phone"] != "") {
      echo ' <a href = "tel:' . $empl_now["phone"] . '">
      <i class="fa fa-phone" aria-hidden="true"></i>' .
        $empl_now["phone"] . '</a>';
    }
    if ($empl_now["email"] != null && $empl_now["email"] != "") {
      echo '<a> <i class="fa fa-envelope-o" aria-hidden="true"></i>' .
        $empl_now["email"] . '</a>';
    }
    echo '</div>
   <div class="different_contact_member">';
    if ($empl_now["vk"] != null && $empl_now["vk"] != "") {
      echo '<a target="_blank" class="contact_btn" href="' . $empl_now["vk"] . '"> <i class="fa fa-vk contact_i" aria-hidden="true"></i> </a>';
    }
    if ($empl_now["facebook"] != null && $empl_now["facebook"] != "") {
      echo '<a target="_blank" class="contact_btn" href="' . $empl_now["facebook"] . '"> <i class="fa fa-facebook contact_i" aria-hidden="true"></i> </a>';
    }
    if ($empl_now["twiter"] != null && $empl_now["twiter"] != "") {
      echo '<a target="_blank" class="contact_btn" href="' . $empl_now["twiter"] . '"> <i class="fa fa-twitter contact_i" aria-hidden="true"></i></a>';
    }
    if ($empl_now["instagram"] != null && $empl_now["instagram"] != "") {
      echo '<a target="_blank" class="contact_btn" href="' . $empl_now["instagram"] . '"> <i class="fa fa-instagram contact_i" aria-hidden="true"></i></a>';
    }
    if ($empl_now["odnakl"] != null && $empl_now["odnakl"] != "") {
      echo '<a target="_blank" class="contact_btn" href="' . $empl_now["odnakl"] . '"> <i class="fa fa-odnoklassniki contact_i" aria-hidden="true"></i></a>';
    }
    if ($empl_now["youtube"] != null && $empl_now["youtube"] != "") {
      echo '<a target="_blank" class="contact_btn" href="' . $empl_now["youtube"] . '"> <i class="fa fa-youtube contact_i" aria-hidden="true"></i></a>';
    }
    echo '</div>';

    echo '</div>';
  }
  echo '</div>';

  include('./elements/footer.php');
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <!-- изменяем тему сайта -->
  <script type='text/javascript' src='js/ChangeTheme.js'></script>
  <!-- разные пользовательские функции -->
  <script type='text/javascript' src='js/MyFunctions.js'></script>
  <script type='text/javascript' src='js/Menu.js'></script>
</body>

</html>