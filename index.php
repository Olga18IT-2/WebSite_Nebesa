<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > Главная страница</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" href="css/index.css">
  
  <!-- собственные стили в приоритете  -->
  <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/js/Arrow.js"></script>
</head>

<body>

  <?php
  include('elements/nav.php');
  echo'<div class="main_container">';
  include('elements/slader.php');
  
  $arr_background_colors = array('rgb(153,153,255)', 'rgb(204,204,255)', 'rgb(176, 133, 255)',
  'rgb(255,204,255)', 'rgb(204,153,255)', 'rgb(153,204,204)');
  $n=count($arr_background_colors); $i=0;
  echo '<h1> Почему выбирают именно нас? </h1>
    <span class="dop_name_content"> Что делает нашу программу лучше других? </span> <br>
  
  <div class="name_content_block">
    <div class="block_1" style="background-color: '.$arr_background_colors[$i++%$n].';"> <img src="/img/photo_index_1.png"> <br>
    <img src="/img/text_1.png" style="width="100%">
    <hr> Более 15 лет
    </div>

    <div class="block_1" style="background-color: '.$arr_background_colors[$i++%$n].';"> <img src="/img/photo_index_2.png"> <br>
    <img src="/img/text_2.png" style="width="100%">
    <hr> Все наши тренеры имеют спортивное педагогическое образование и звания ЗМС, МС или КМС
    </div>
    
    <div class="block_1" style="background-color: '.$arr_background_colors[$i++%$n].';"> <img src="/img/photo_index_3.png">  <br>
    <img src="/img/text_3.png" style="width="100%">
    <hr> Спортивный клуб "Небеса" рекомендован федерацией гимнастики. 
    Клуб также состоит в Ассоциации "Спортивные клубы РБ".
    </div>
    
    <div class="block_1" style="background-color: '.$arr_background_colors[$i++%$n].';"> <img src="/img/photo_index_4.png">  <br>
    <img src="/img/text_4.png" style="width="100%">
    <hr> Спортивный клуб "Небеса" рекомендован федерацией гимнастики. 
    Клуб также состоит в Ассоциации "Спортивные клубы РБ".
    </div>
    
    <div class="block_1" style="background-color: '.$arr_background_colors[$i++%$n].';"> <img src="/img/photo_index_5.png">  <br>
    <img src="/img/text_5.png" style="width="100%">
    <hr> У нас есть возможность индивидуальных занятий с тренером
    </div>
    
    <div class="block_1" style="background-color: '.$arr_background_colors[$i++%$n].';"> <img src="/img/photo_index_6.png">  <br>
    <img src="/img/text_6.png" style="width="100%">
    <hr> Занимаясь в нашем клубе, ребёнок сможет получить спортивные разряды, причём не только
    юношеские, но и взрослые
    </div>
  </div>';


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