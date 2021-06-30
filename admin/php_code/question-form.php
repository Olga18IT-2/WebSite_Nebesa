<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

/* Ваш адрес и тема сообщения */
$address = "sport_nebesa@mail.ru";
$sub = 'Вопрос, не найденный на сайте (при помощи формы сайта Спортивный Клуб "Небеса")';

/* Формат письма */
$mes = $sub."\n
**************************************
ОТПРАВИТЕЛЬ:
--------------------------------------
Имя: $name
Email: $email
--------------------------------------
??????????????????????????????????????
Вопрос: $message
======================================
";

/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 0; URL="/faq.php"');
	echo "<script>alert(\"Ваш вопрос отправлен! \");</script>";}
else {
	header('Refresh: 0; URL="/faq.php"');
	echo "<script>alert(\"Ваш вопрос НЕ отправлен! Повторите попытку позже! \");</script>";}
