<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > Запись на занятие</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_video_slice.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" media="screen" href="css/style_form.css">
  <!-- собственные стили в приоритете  -->

  <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/js/Arrow.js"></script>
  <script type="text/javascript" src="/js/GetAge.js"></script>
</head>

<body>

  <?php
  include('elements/nav.php');
  $name = 'Записаться (стать участником) :';
  $text = require './elements/video_slader.php';
  $output  = str_replace('NAME', $name, $text);
  // меняем(что, на что, где)
  echo $output; ?>
  <h2 style="color: darkgreen;"> Для получения пробного занятия (бесплатно) заполните данную анкету и с вами свяжется наши специалисты.
    <hr>
  </h2>
  <h4> Если после данного занятия вы решите продолжить посещение нашего спортивного клуба на платной основе, то
    вы должны связаться с нами (по телефону, email или вживую) и уведомить об этом.<br>
    Все необходимые контактные данные вы можете найти <a href="/contact.php" style="color: blue;"> здесь </a>
    <hr>
  </h4>

  <form class="contact_form" action="/admin/php_code/contact-form.php" method="post">
    <fieldset class="form_became_a_member">
      <legend>Личная информация о ребёнке: </legend>
      <p>
        <label for="surname_child"> Фамилия :</label>
        <input type="text" name="surname_child" placeholder="Введите фамилию ребёнка" required="required" />
      </p>

      <p>
        <label for="name_child">Имя:</label>
        <input type="text" name="name_child" placeholder="Введите имя ребёнка" required="required" />
      </p>

      <p> <label for="last_name_child"> Отчество :</label>
        <input type="text" name="last_name_child" placeholder="Введите отчество ребёнка" required="required" />
      </p>

      <p> <label for="gender" required="required"> Пол: </label>
        <select name="gender">
          <option>Женский</option>
          <option>Мужской</option>
        </select>
      </p>

      <?php
      $min_date = require('./admin/php_code/min_year.php');
      $min_date_arr = explode("-", $min_date);
      $min_date_for_users = $min_date_arr[2] . '.' . $min_date_arr[1] . '.' . $min_date_arr[0];

      $max_date = require('./admin/php_code/max_year.php');
      $max_date_arr = explode("-", $min_date);
      $max_date_for_users = $max_date_arr[2] . '.' . $max_date_arr[1] . '.' . $max_date_arr[0];

      
      echo '
      <p> <label for="date_birthday"> Дата рождения : </label>
          <input id="input1" type="date" name="date_birthday"
          required="required" oninput="change()"
          min = "' . $min_date . '" max="' . $max_date . '"/>
          <span class="form_hint">Дата рождения должны быть не раньше, чем ' . $min_date_for_users . '
          и не позже, чем ' . $max_date_for_users . '</span>
      </p>'; ?>

      <p> <label for="years">Возраст : </label>
        <input id="input2" type="number" name="years" placeholder="Количество полных лет ребёнка вычисляется автоматически по введённой дате рождения" required="required" readonly>
        <span class="form_hint">Вычисляется автоматически (НЕ требуется вводить) !!! Если значение не отображается,
          то проверьте корректность введённых данных в поле "Дата рождения"
        </span>
      </p>
    </fieldset>

    <fieldset class="form_became_a_member">
      <legend> Дополнительная информация о ребёнке: </legend>

      <p> <label for="sport_now" required="required"> Выберите желаемое направление :</label>
        <select name="sport_now">
          <option>Художественная гимнастика</option>
          <option>Спортивная гимнастика</option>
          <option>Эстетическая гимнастика</option>
        </select>
      </p>

      <p> <label for="sport_before" required="required"> Занимался ли ваш ребёнок каким-либо спортом ранее ?</label>
        <select name="sport_before">
          <option>Нет</option>
          <option>Да</option>
        </select>
      </p>

      <p> <label for="sport"> Если да, то укажите каким ?</label>
        <textarea name="sport" cols="40" rows="6"></textarea>
        <span class="form_hint"> Поле не является обязательным для заполнения </span>
      </p>

      <p> <label for="have_ill" required="required">Имеются ли хронические заболевания ?</label>
        <select name="have_ill">
          <option>Нет</option>
          <option>Да</option>
        </select>
      </p>

      <p> <label for="ill"> Если да, то укажите какие?</label>
        <textarea name="ill" cols="40" rows="6"></textarea>
        <span class="form_hint"> Поле не является обязательным для заполнения </span>
      </p>
    </fieldset>

    <fieldset class="form_became_a_member">
      <legend>Информация для связи с вами:</legend>
      <p>
        <label for="surname"> Фамилия :</label>
        <input type="text" name="surname" placeholder="Введите Вашу фамилию" required="required" />
      </p>

      <p>
        <label for="name">Имя:</label>
        <input type="text" name="name" placeholder="Введите Ваше имя" required="required" />
      </p>

      <p> <label for="last_name"> Отчество :</label>
        <input type="text" name="last_name" placeholder="Введите Ваше отчество" required="required" />
      </p>

      <p>
        <label> Кем вы приходитесь ребёнку? :
          <input list="child---adult_List" name="child---adult" required="required">
          <span class="form_hint"> Выберите вариант из приведенного списка или введите свой </span>
          <datalist id="child---adult_List">
            <option value="Мама">
            <option value="Папа">
            <option value="Бабушка">
            <option value="Дедушка">
            <option value="Тётя">
            <option value="Дядя">
            <option value="Сестра">
            <option value="Брат">
          </datalist> </label>
      </p>

      <p> <label for="tel"> Мобильный телефон :</label>
        <input type="tel" name="tel" pattern="\+375 \d{2} \d{3}-\d{2}-\d{2}" title="+375 29 123-34-56" placeholder="+375 29 123-34-56" required="required" />
        <span class="form_hint"> Правильный формат ввода: "+375 29 123-34-56" </span>
      </p>

      <p> <label for="email"> Email :</label>
        <input type="email" name="email" placeholder="name@domain.com" required="required" />
        <span class="form_hint"> Правильный формат ввода: "name@domain.com" </span>
      </p>
    </fieldset>

    <fieldset class="form_became_a_member">
      <button class="submit" type="submit">Отправить сообщение</button>
    </fieldset>
  </form>;
  <?php
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
</body>

</html>