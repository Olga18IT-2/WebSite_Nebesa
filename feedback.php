<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > Отзывы</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_video_slice.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" href="css/style_form.css">
  <link rel="stylesheet" href="css/feedback.css">
  <!-- собственные стили в приоритете  -->

  <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/js/Arrow.js"></script>
</head>

<body>
  <?php
  include('elements/nav.php');
  $name = 'Отзывы :';
  $text = require './elements/video_slader.php';
  $output  = str_replace('NAME', $name, $text);
  // меняем(что, на что, где)
  echo $output;

  function myscandir($dir, $sort = 0, $sort_1 = 0)
  {
    $list = scandir($dir, $sort);
    // если директории не существует
    if (!$list) return false;
    // удаляем . и ..
    if ($sort == 0) unset($list[0], $list[1]);
    else unset($list[count($list) - 1], $list[count($list) - 1]);

    foreach ($list as $el) {
      $mass[] = substr($el, 0, -4);
    }
    if (!empty($mass)) {
      natcasesort($mass);
      if ($sort_1 == -1) $mass = array_reverse($mass);
      return $mass;
    } else return null;
  }

  $dir = './admin/feedback'; // папка, в которой хранятся документы с отзывами
  $files = myscandir($dir, 1, -1); // получаем список файлов без . и ..  и отсортированный в обратном порядке

  $dir_1 = './img/images_people'; // папка, в которой хранятся изображения
  $files_1 = myscandir($dir_1, 1); // получаем список файлов без . и .. 
  ?>

  <div class="new_feedback">
    <fieldset class="form_became_a_member">
      <h2> Оставить отзыв: </h2>
    </fieldset>
    <form action="/admin/php_code/feedback.php" method="post">

      <fieldset class="form_became_a_member">
        <div class="left">
          <?php
          $j = 0;
          foreach ($files_1 as $file_1) {
            if ($j == 0) {
              echo '<img id="my_img" src="./img/images_people/' . $file_1 . '.png" alt="">';
              $j++;
            } else {
              break;
            }
          }
          ?>
          <select class="select_img" id="select__img" name="my_img" onchange="select_photo();">
            <?php
            foreach ($files_1 as $file_1)
              echo '<option value="' . $file_1 . '">' . $file_1 . '</option>';
            ?>
          </select>
        </div>

        <div class="right">
          <p>
            <label for="name">Имя:</label>
            <input type="text" name="name" placeholder="Введите ваше имя" required />
          </p>

          <p>
            <label for="message">Текст сообщения:</label>
            <textarea name="message" required style="width: 85%; height: 150px; resize: none;"></textarea>
          </p>

          <div class="rating-area">
            <input type="radio" id="star-5" name="rating" value="5">
            <label for="star-5" title="Оценка «5»"></label>
            <input type="radio" id="star-4" name="rating" value="4">
            <label for="star-4" title="Оценка «4»"></label>
            <input type="radio" id="star-3" name="rating" value="3">
            <label for="star-3" title="Оценка «3»"></label>
            <input type="radio" id="star-2" name="rating" value="2">
            <label for="star-2" title="Оценка «2»"></label>
            <input type="radio" id="star-1" name="rating" value="1" checked>
            <label for="star-1" title="Оценка «1»"></label>
          </div>
        </div>
      </fieldset>
      <fieldset class="form_became_a_member">
        <button class="submit" type="submit">Отправить</button>
      </fieldset>
    </form>
  </div>
  <h2 style="margin-top: 20px; margin-bottom: -30px;">Все отзывы: </h2>
  <?php
  echo '
  <div class="all_feedbacks">
    <div class="feedbacks_table">';
  if ($files != null)
    foreach ($files as $this_file) {
      $this_el = require('./admin/feedback/' . $this_file . '.php');
      echo '
      <div class="feedback_container">
      <div class="feedback ">
        <img src="./img/images_people/' . $this_el["my_img"] . '.png" alt="">
        <div class="feedback_name">' . $this_el["name"] . '</div>
        <div class="feedback_stars">';
      for ($i = 0; $i < $this_el["stars"]; $i++)
        echo '<i class="fas fa-star"></i>';
      for ($i = 0; $i < (5 - $this_el["stars"]); $i++)
        echo '<i class="far fa-star"></i>';
      echo '</div>
        <textarea class="textarea_feedback" readonly >' . $this_el["text"] . '</textarea>
      </div>
    </div>
      ';
    }
  echo '
    </div>
  </div>';

  include('./elements/footer.php');
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- изменяем тему сайта -->
  <script type='text/javascript' src='js/ChangeTheme.js'></script>
  <!-- разные пользовательские функции -->
  <script type='text/javascript' src='js/MyFunctions.js'></script>
  <script type='text/javascript' src='js/Menu.js'></script>
  <script type='text/javascript' src='js/SelectPhoto.js'></script>
</body>

</html>