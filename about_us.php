<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Небеса > О нас</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- файл css для того, чтобы все стили во всех
  браузерах смотрелись одинаково -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_video_slice.css">
  <link rel="stylesheet" href="css/style_media.css">
  <link rel="stylesheet" href="css/about_us.css">

  <!-- собственные стили в приоритете  -->
  <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="/js/Arrow.js"></script>
</head>

<body>
  <?php
  include('elements/nav.php');
  $name = 'О нас :';
  $text = require './elements/video_slader.php';
  $output  = str_replace('NAME', $name, $text); 
  // меняем(что, на что, где)
  echo $output;
  ?>
  
  <?php
  $text = require('./admin/info/text_for_us.php');
  $name = $text['name'];
  $photo = $text['photo'];
  echo '
  <table class="page-section">
  <tr>
    <td class="block-left">
      <img src="/admin/img/empl/liderships/'.$photo.'" alt="photo">
      <br><br>
      <b> <a href="/employee.php"> С уважением, '. $name .' ❤❤❤ </a> </b> 
    </td>
    <td class="block-right">
      '.$text['str'].'
      </td>
      </tr>
  </table>';

  $history = require('./admin/info/history.php');
  $colors = array("rgb(106, 245, 106)", "rgb(247, 247, 110)", "rgb(251, 126, 126)", "rgb(248, 120, 225)", "rgb(37, 226, 217)");
  $icons = array ("fa-lightbulb-o", "fa-rocket", "fa-map-marker", "fa-smile-o", "fa-edit", "fa-users", "fa-heart-o", "fa-newspaper-o", "fa-flag", "fa-line-chart",
  "fa-globe", "fa-briefcase", "fa-check-square-o", "fa-calendar-check-o", "fa-gift", "fa-trophy", "fa-star-o");

  echo '<h2 class="section-title"> Наша история: </h2>
  <section class="timeline" style="position: relative;">
  <div class="vertical__line" data-aos="zoom-in-up"></div>
  ';
  $i=0;
  foreach ($history as $el)
      { if ($i%2==0) $storona = 'left'; 
        else $storona= 'right'; 

     echo '<div class="container-timeline '.$storona.'" data-aos="fade-up">
     
     <div class="content">
       <div class="point '.$storona.'" style = "border-color: '.$colors[$i % (count($colors))].';">
            <div class="line-'.$storona.'" style = "background: '.$colors[$i % (count($colors))].';"></div>
       </div>

       <p> 
       <i class="icon fa '.$icons[$i % count($icons)].' timeline-item-img '.$storona.'" ></i>';
       for ($j=0; $j<count($el['info']); $j++)
       { echo $el['info'][$j].' <br>'; 
        if($el['info'][$j]=="Праздник 15-летия клуба.") 
        echo '<img src="img/blagodarnost-15years.jpg" class="img_gramota">'; 
      }  
       echo' <div class="date '.$storona.'
       " style = "background-color: '.$colors[$i % (count($colors))].'; ">'.
       $el['year'].'</div> 
       </p>
     </div>
   </div>';
    $i=$i+1; 
    }
    echo '</section>';
    echo '<img src="img/fon_about_us.png" class="img_fon_about_us">';
  include('./elements/footer.php');
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script> AOS.init(); </script>

  <!-- изменяем тему сайта -->
  <script type='text/javascript' src='js/ChangeTheme.js'></script>
  <!-- разные пользовательские функции -->
  <script type='text/javascript' src='js/MyFunctions.js'></script>
  <script type='text/javascript' src='js/Menu.js'></script>
</body>
</html>