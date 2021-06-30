<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > Часто задаваемые вопросы</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_video_slice.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" href="css/faq.css">
  <link rel="stylesheet" href="css/style_form.css">
  <!-- собственные стили в приоритете  -->
  <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/js/Arrow.js"></script>
</head>

<body>

  <?php
  include('elements/nav.php');
  $name = 'Часто задаваемые вопросы :';
  $text = require './elements/video_slader.php';
  $output  = str_replace('NAME', $name, $text);
  // меняем(что, на что, где)
  echo $output;

  $faq = require './admin/info/faq.php';
  if (empty($faq)) $n = 0;
  else $n = count($faq);

  $faq_dop_info = require './admin/info/faq_dop_info.php';
  if (empty($faq_dop_info)) $m = 0;
  else $m = count($faq_dop_info);

  echo '<div class="container_interesting_info">';
  for ($j = 0; $j < $m; $j++) {
    if ($faq_dop_info[$j]["type"] == "doc") $this_path = '/admin/documents_for_faq/' . $faq_dop_info[$j]["path"];
    else {
      if ($faq_dop_info[$j]["type"] == "page") $this_path = '/' . $faq_dop_info[$j]["path"];
      else $this_path = '';
    }
    echo '<a target="_blank" href="' . $this_path . '" class="button">' . $faq_dop_info[$j]["name"] . '</a>';
  }
  echo '
  '; ?>
  <form class="contact_form" action="/admin/php_code/question-form.php" method="post">
    <fieldset class="form_became_a_member">
      <p>
      <h3>Задайте вопрос</h3>
      <h5>Если не нашли ответ на свой вопрос, можете задать его, воспользовавшись данной формой:</h5>
      </p>
    </fieldset>
    <fieldset class="form_became_a_member">
      <p>
        <label for="name">Имя:</label>
        <input type="text" name="name" placeholder="Введите Ваше имя" required="required" />
      </p>

      <p> <label for="email"> Email :</label>
        <input type="email" name="email" placeholder="name@domain.com" required="required" />
        <span class="form_hint"> Правильный формат ввода: "name@domain.com" </span>
      </p>
      <p>
        <label for="message">Текст сообщения:</label>
        <textarea name="message" required style="width: 85%; height:100px;"></textarea>
      </p>
    </fieldset>
    <fieldset class="form_became_a_member">
      <button class="submit" type="submit" style="width: 120px;">Отправить сообщение</button>
    </fieldset>
  </form>';

  <?php
  echo '</div>';

  echo '<div class="container_question">
    <section class="column">';
  for ($i = 0; $i < $n; $i++) {
    echo '<h2>' . $faq[$i]["category"] . '</h2>';
    for ($j = 0; $j < count($faq[$i]["questions"]); $j++) {
      echo '<div>
        <label class="accordion">
          <input type="checkbox" name="checkbox-accordion">
            <div class="accordion__header">' . $faq[$i]["questions"][$j]["text"] . '</div>
              <div class="accordion__content">
              <h6>Ответ:</h6>
              <p>' . $faq[$i]["questions"][$j]["answer"] . '</p>
              </div>
        </label>           
      </div>';
    }
  }include('./elements/footer.php');
  echo '</section>'; 
  echo '</div>';

  ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <!-- изменяем тему сайта -->
  <script type='text/javascript' src='js/ChangeTheme.js'></script>
  <script type='text/javascript' src='js/Menu.js'></script>
  <!-- разные пользовательские функции -->
  <script type='text/javascript' src='/js/faq/jquery-2.1.1.js'></script>
  <script type='text/javascript' src='/js/faq/jquery.mobile.custom.min.js'></script>
  <script type='text/javascript' src='/js/faq/main.js'></script>
</body>

</html>