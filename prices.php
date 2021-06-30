<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > Цены и оплата</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_video_slice.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" href="css/prices.css">
  <!-- собственные стили в приоритете  -->
  <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/js/Arrow.js"></script>
</head>

<body>
  <?php
  include('elements/nav.php');
  $name = 'Цены и оплата:';
  $text = require './elements/video_slader.php';
  $output  = str_replace('NAME', $name, $text);
  // меняем(что, на что, где)
  echo $output;

  $this_prices = require './admin/info/prices.php';
  if (!empty($this_prices)) $n = count($this_prices);
  else $n = 0;
  echo '
  <div class="info inline">
  <div class="block_1"> <img src="/img/price_1.png"> <br> <big> Лучшие цены </big> </div>
  <div class="block_1"> <img src="/img/price_2.png"> <br> <big> Нас рекомендуют! </big> </div>
  <div class="block_1"> <img src="/img/price_3.png"> <br> <big> Лучшее качество </big> </div>
  </div>';

  if ($n != 0) {
    echo '
    <div class="outer">
      <div class="inner">
       <table class="prices">
        <tr class="first_str">
          <th></th>';
          for($i=0; $i<$n; $i++)
          echo '<th>'.$this_prices[$i]["hours"].' ч.<br> в неделю </th>';
        echo'</tr>

        <tr>
          <th class="str">Тип группы: </th>';
          for($i=0; $i<$n; $i++)
          echo '<td>'.$this_prices[$i]["info"]["type"].'</td>';
        echo'</tr>

        <tr>
          <th class="str">Количество занятий в неделю:</th>';
          for($i=0; $i<$n; $i++)
          echo '<td>'.$this_prices[$i]["info"]["kolvo_in_week"].'</td>';         
       echo'</tr>

        <tr>
          <th class="str">Продолжительность занятия:</th>';
          for($i=0; $i<$n; $i++)
          echo '<td>'.$this_prices[$i]["info"]["length"].'</td>';       
       echo'</tr>

        <tr>
          <th class="str">Перерасчет при пропусках:</th>';
          for($i=0; $i<$n; $i++)
          {
            $temp = $this_prices[$i]["info"]["propusk_price"];
            if($temp=="Да") {
              echo '<td> <img src="/img/yes.png" width="25px" hight="25px"> </td>';
            }
            else{
              if($temp=="Нет"){
                echo '<td> <img src="/img/no.png" width="25px" hight="25px"> </td>';
              }
              else{
                echo '<td>'.$temp.'</td>'; 
              }
            }
          }   
       echo'</tr>
            
       <tr>
          <th class="str">Отработка пропущенных занятий:</th>';
          for($i=0; $i<$n; $i++)
          {
            $temp = $this_prices[$i]["info"]["propusk_work"];
            if($temp=="Да") {
              echo '<td> <img src="/img/yes.png" width="25px" hight="25px"> </td>';
            }
            else{
              if($temp=="Нет"){
                echo '<td> <img src="/img/no.png" width="25px" hight="25px"> </td>';
              }
              else{
                echo '<td>'.$temp.'</td>'; 
              }
            }
          }
                    
       echo'</tr>

       <tr class="last_str">
            <th>Взнос в месяц</th>';
            for($i=0; $i<$n; $i++)
            echo '<td>'.$this_prices[$i]["price"].' BYN </td>';

       echo'</tr>
    </table>
  </div>
  </div>
  <br><br>';
  }
  echo'
  <div class="div_oplata"><h3 style="text-align: center;"> 
   Для вашего удобства мы подготовили ряд способов оплаты занятий:</h3><br>
  <p>⭐ оплатив квитанцию в любом банке </p>
  <p>⭐ через клиент-банк </p>
  <p>⭐ воспользовавшись услугами электронных платежных сервисов www.e-pay.by и www.ipay.by </p>
  <h4> Как оплатить картой ?</h4>
  <h5 data-aos="flip-left"><p> <big>СПОСОБ 1 </big> (если вы используете Интернет-Банкинг)</p> </h5>
  <p><big style="color:blue;">①</big> Зайдите в Личный кабинет своей пластиковой карточки (на компьютере или через приложение в мобильном телефоне) <br></p>
  <p><big style="color:blue;">②</big> Найдите нашу организацию:<br>
    2.1 → Благотворительность, общественные объединения <br>
    2.2 →  Спортивные объединения <br>
    2.3 →   Спортивный клуб "Небеса" <br>
    2.4 →    Членский взнос <br> </p>
    <img src="/admin/img/pay/img1.png"><br>
  <p><big style="color:blue;">③</big> Введите номер Членского билета</p>
  <p><big style="color:blue;">④</big> Введите сумму для оплаты</p>
  <p><big style="color:blue;">⑤</big> Оплатите</p>
  <p><big style="color:blue;">⑥</big> Распечатайте квитанцию и передайте тренеру 
  (или перешлите на e-мейл тренера или через любую доступную соц сеть
  (контактные данные своего тренера вы можете найти <a href="/employee.php" target="_blank" >
  здесь </a>) ).</p>

  <h5 data-aos="flip-left"><p> <big>СПОСОБ 2 </big> 
  (<a href="https://e-pay.by" target="_blank"> E-pay </a>)</p> </h5>
  <p>Платежный ресурс <a href="https://e-pay.by" target="_blank" >
   www.е-pay.by </a> - это совместный проект ООО «ВЕБ ПЭЙ» и OAO «Приорбанк».
  ООО «ВЕБ ПЭЙ» является белорусским разработчиком системы WEBPAY™, обслуживающей платежи с помощью банковских платежных карточек в сети Интернет.
  Оплата без комиссии. <br> </p>
  <p>Если вы уже зарегистрированы в системе e-pay.by, то перейдите 
  <a href="https://payment.webpay.by/epay/default" target="_blank" >
  по этой ссылке </a>.</p>
  <p> Если еще не зарегистрированы, то:</p>
  <p><big style="color:blue;">①</big> Перейдите по ссылке: <a href="https://e-pay.by" target="_blank" >
  www.е-pay.by </a> <br></p>
  <p><big style="color:blue;">②</big> Найдите нашу организацию:<br></p>
  <div class="info_block_with_foto inline">
  <div class="block_1_foto"> 2.1 → Учреждения <br> образования <br>
  <img src="/admin/img/pay/img2.png"> </div>
  <div class="block_1_foto"> 2.2 →  Спорт и физ.развитие - Школы,<br> клубы фитнеса, танца <br>
  <img src="/admin/img/pay/img3.png"> </div>
  <div class="block_1_foto"> 2.3 →   Спортивный клуб "Небеса" -<br> Членский взнос <br>
  <img src="/admin/img/pay/img4.png"></div>
  </div>
  <p><big style="color:blue;">③</big> Введите номер банковской карты</p>
  <p><big style="color:blue;">④</big> Введите номер членского билета</p>
  <p><big style="color:blue;">⑤</big> Введите сумму для оплаты и завершите оплату</p>
  <p><big style="color:blue;">⑥</big> Распечатайте квитанцию и передайте тренеру 
  (или перешлите на e-мейл тренера или через любую доступную соц сеть
  (контактные данные своего тренера вы можете найти <a href="/employee.php" target="_blank" >
  здесь </a>) ).</p>

  <h5 data-aos="flip-left"><p> <big>СПОСОБ 3 </big> ( через сервис <a href="https://ipay.by" target="_blank" >
  www.ipay.by </a> )</p> </h5>
  <p> «Мобильные платежи <a href="https://ipay.by" target="_blank" >
  iPay </a>» – современная платежная система, которая позволяет вам, используя средства со своего лицевого счета мобильного телефона (Белорусских операторов МТС, velcom и life:)), совершать покупки в интернете, приобретать билеты в театр и на концерт, погашать кредит, оплачивать коммунальные услуги, доступ в интернет, ТВ, принимать участие в интернет-аукционах, играть в различные лотереи, жертвовать на благотворительные цели, а также оплачивать более 36 000 других услуг во всех регионах страны.
  <p><big style="color:blue;">①</big> Выберите оператора сотовой связи <br></p>
  <p><big style="color:blue;">②</big> Найдите нашу организацию:<br>
    2.1 → Благотворительность, общественные объединения <br>
    2.2 →  Спортивные объединения <br>
    2.3 →   Спортивный клуб "Небеса" <br>
    2.4 →    Членский взнос <br> </p>
    <img src="/admin/img/pay/img5.png" width="auto" height="50%"><br>
  <p><big style="color:blue;">③</big> Пройдите процедуру подтверждения номера телефона</p>
  <p><big style="color:blue;">④</big> Введите номер членского билетa</p>
  <p><big style="color:blue;">⑤</big> Введите сумму для оплаты и завершите оплату</p>
   <p><big style="color:blue;">⑥</big> Распечатайте квитанцию и передайте тренеру 
  (или перешлите на e-мейл тренера или через любую доступную соц сеть
  (контактные данные своего тренера вы можете найти <a href="/employee.php" target="_blank" >
  здесь </a>) ).</p>
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
</body>

</html>