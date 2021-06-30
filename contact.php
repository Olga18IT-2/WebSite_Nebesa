<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > Контакты</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_video_slice.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" href="css/contact.css">

  <!-- собственные стили в приоритете  -->
  <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/js/Arrow.js"></script>
</head>

<body>
  <?php
  include('elements/nav.php');
  $name = 'Контакты :';
  $text = require './elements/video_slader.php';
  $output  = str_replace('NAME', $name, $text);
  // меняем(что, на что, где)
  echo $output;
  ?>
  <section class="contact-section">
    <div class="left-content" data-aos="fade-right">
      <h1>Спортивный клуб "Небеса"</h1>
      <h3>Готовы ответить на все интересущие вас вопросы!</h3>
      <p> Для этого вы можете воспользоваться <a href="/faq.php" target="_blank" style="color:blue; text-decoration:underline;">специальной формой сайта</a> <br>
        или при помощи телефона / электоронной почте, указанных ниже :</p>
      <div class="contact-info">
        <p><b><i class="fa fa-phone-square"></i> Телефон :</b>
          <a href="tel:<?php include('./admin/info/phone.php'); ?>">
            <?php include('./admin/info/phone.php'); ?>
          </a>
        </p>
        <p><b><i class="fa fa-envelope-square"></i> Email:</b>
          <a href="">
            <?php include('./admin/info/email.php'); ?>
          </a>
        </p>
      </div>
      <hr>
      <p><b>Время приёма звонков:</b> <br>
        Понедельник - Пятница: 09:00 - 19:00, <br>
        Суббота - Воскресенье: 10:00 - 16:00.
      </p>
      <hr>
      <h3>А также вы можете найти нас в социальных сетях:</h3>
      <div class="social-media">
        <ul>
          <li><a target="_blank" href="https://vk.com/nebesasport"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
          <li><a target="_blank" href="https://www.facebook.com/Гимнастический-клуб-Небеса-544493485743139/"><i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
          <li><a target="_blank" href="https://twitter.com/neboclub"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a target="_blank" href="https://www.instagram.com/nebesasport/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a target="_blank" href="https://ok.ru/gimnastic?st._aid=GroupTopicLayer_VisitProfile"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
          <li><a target="_blank" href="https://www.youtube.com/channel/UCpNmUVLW6qUYhunCtkTj1Bg"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <hr>
      <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1060.1107299157418!2d26.07787660339655!3d52.123342780452596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4727a1377e81393b%3A0x8f3e8296a886c33f!2z0YPQuy4g0JPQsNC50LTQsNC10L3QutC-IDcwLCDQn9C40L3RgdC6LCDQkdC10LvQsNGA0YPRgdGM!5e0!3m2!1sru!2snl!4v1621196494751!5m2!1sru!2snl" 
      width="100%" height="100%" style="border:0px;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>


  <?php include('./elements/footer.php'); ?>

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