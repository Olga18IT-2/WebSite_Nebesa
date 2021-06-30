<?php
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$text = htmlspecialchars($_POST["message"]);
$img = htmlspecialchars($_POST["my_img"]);
if (isset($_POST["rating"])) $stars = htmlspecialchars($_POST["rating"]);
else $stars = 0;

$text_in_file = '<?php 
$el_feedback = array(
  "name"=>"' . $name . '", 
  "stars"=>' . $stars . ', 
  "text"=>"' . $text . '",
  "my_img"=>"' . $img . '"
);

return $el_feedback;
?>';

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
    if(!empty($mass))
    {  natcasesort($mass);
    if($sort_1 == -1) $mass = array_reverse($mass);
    return $mass;}
    else return null;
}


$dir = '../feedback'; // папка, в которой хранятся документы с отзывами
$files = myscandir($dir, 1, -1); // получаем список файлов без . и ..  
if ($files != null) {
  $j=0;
  foreach($files as $f_1)
  {
    if($j==0) {$m = intval($f_1) + 1; $j++;}
    else break;
  }
} else $m = 1;

if(file_put_contents('../feedback/'.$m.'.php', $text_in_file))
{ header('Refresh: 0; URL="/feedback.php');
  echo "<script>alert(\"Отзыв успешно добавлен! \");</script>";
}
else
{ header('Refresh: 0; URL="/feedback.php');
  echo "<script>alert(\"Отзыв НЕ удалось добавить! Повторите попытку позже! \");</script>";
}
