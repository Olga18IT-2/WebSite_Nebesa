<?php

/* Задаем переменные */
$surname_child = htmlspecialchars($_POST["surname_child"]);
$name_child = htmlspecialchars($_POST["name_child"]);
$last_name_child = htmlspecialchars($_POST["last_name_child"]);
$gender = htmlspecialchars($_POST["gender"]);
$date_birthday = htmlspecialchars($_POST["date_birthday"]);
$years = htmlspecialchars($_POST["years"]);
$sport_now = htmlspecialchars($_POST["sport_now"]);

$sport_before = htmlspecialchars($_POST["sport_before"]);
$sport = htmlspecialchars($_POST["sport"]);
if($sport_before == "Да" || (empty($sport) == false) )
{
$info_about_sport = ' Занимались спортом ранее? - '.$sport_before.'
  Каким? - '.$sport;
}
else {
$info_about_sport = ' Занимались спортом ранее? - '.$sport_before;
}

$have_ill = htmlspecialchars($_POST["have_ill"]);
$ill = htmlspecialchars($_POST["ill"]);
if($have_ill == "Да" || (empty($ill) == false) )
{
$info_about_ill = ' Имеются ли заболевания - '.$have_ill.'
  Какие? - '.$ill;
}
else {
$info_about_ill = ' Имеются ли заболевания - '.$have_ill;
}

$surname = htmlspecialchars($_POST["surname"]);
$name = htmlspecialchars($_POST["name"]);
$last_name = htmlspecialchars($_POST["last_name"]);
$child_adult = htmlspecialchars($_POST["child---adult"]);
$tel = htmlspecialchars($_POST["tel"]);
$email = htmlspecialchars($_POST["email"]);

/* Ваш адрес и тема сообщения */
$address = "sport_nebesa@mail.ru";
$sub = 'Заявка на запись ребёнка (при помощи формы сайта Спортивный Клуб "Небеса")';

/* Формат письма */
$mes = $sub."\n
**************************************
ОТПРАВИТЕЛЬ:
--------------------------------------
Фамилия: $surname
Имя: $name
Отчество: $last_name
Кем является ребёнку: $child_adult
Телефон: $tel
Email: $email
--------------------------------------
**************************************
Фамилия ребёнка: $surname_child
Имя ребёнка: $name_child
Отчество ребёнка: $last_name_child
Пол: $gender
Дата рождения: $date_birthday
Полное количество лет: $years
======================================
Предпочитаемое направление: $sport_now
$info_about_sport
$info_about_ill
======================================
";

/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";

if(mail($address, $sub, $mes, $from))
{ header('Refresh: 0; URL="/became_a_member.php');
  echo "<script>alert(\"Ваша анкета успешно отпавлена! В ближайшее рабочее время с Вами свяжутся наши сотрудники!\");</script>";
}
else
{ header('Refresh: 0; URL="/became_a_member.php');
  echo "<script>alert(\"НЕ удалось отправить анкету! Повторите попытку позже! \");</script>";
}