<?php
$main_slander[] = array(
  "name" => 'Спортивный клуб <br> "Небеса"',
  "info" => "Художественная, спортивная и оздоровительная гимнастика", 
  "button" => "О нас...", "path" => "/about_us.php"
);
$main_slander[] = array(
  "name" => "Цены и оплата",
  "info" => "Желаете узнать о ценах и способах оплаты? Тогда вам сюда:", "button" => "Перейти...", "path" => "/prices.php"
);
$main_slander[] = array(
  "name" => "Стать участником",
  "info" => 'Для записи на первое (бесплатное) пробное занятие перейдите по ссылке и заполните анкету:', "button" => "Записаться", "path" => "/became_a_member.php"
);
$main_slander[] = array(
  "name" => "Остались вопросы?",
  "info" => "Вы можете поискать здесь: (если не найдёте, то можете задать вопрос при помощи специальной формы)", "button" => "Перейти", "path" => "/faq.php"
);
/* $main_slander[] = array(
  "name" => "",
  "info" => "", "button" => "", "path" => ""
); */

echo '<div class="slider">
  <div class="slider__inner">';
foreach ($main_slander as $el) {
  echo
  '<div class="slider__item">
      <div class="slider__item-content">
        <div class="slider__title">' .
         $el["name"] .
        '</div>
        <div class="slider__text">' .
         $el["info"] .
        '</div>
        <a class="slider__btn default-btn" href="' . $el["path"] . '">' .
         $el["button"] .
        '</a>
      </div>
    </div>';
}
echo
    '</div>
  </div>';

?> 