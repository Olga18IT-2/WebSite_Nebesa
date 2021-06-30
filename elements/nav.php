<header class="header">
  <div class="main_header_container">
    <div class="header_container_left">
      <a href="/index.php"><img src="/img/emblema.png"></a>
    </div>

    <div class="header_container_right">
      <div class="header_top">
        <div class="container">
          <div class="header_contacts">
            <img src="/img/text.png">
            <a class="header__phone" href="tel:<?php include('./admin/info/phone.php'); ?>">
              <i class="fa fa-phone-square"></i>
              <?php include('./admin/info/phone.php'); ?></a>
            <a class="header__email" href="">
              <i class="fa fa-envelope-square"></i>
              <?php include('./admin/info/email.php'); ?></a>
            <button class="toggle-theme">
              <i class="fa fa-exchange" aria-hidden="true"></i>
              Изменить тему
            </button>
          </div>
        </div>
      </div>
      <div class="header__content">
        <div class="container">
          <div class="header__content-inner">
            <nav class="menu">
              <div class="header__btn-menu">
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
              </div>
              <ul>
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/about_us.php">О нас</a></li>
                <li><a href="/employee.php">Наши сотрудники</a></li>
                <li><a href="/gallery.php">Фотогалерея</a></li>
                <li><a href="/faq.php">Вопрос-ответ</a></li>
                <li><a href="/feedback.php">Отзывы</a></li>
                <li><a href="/contact.php">Контакты</a></li>
                <a class="header__btn" href="/became_a_member.php">
                  <i class="fa fa-briefcase" aria-hidden="true"></i>
                  Запись на занятие
                </a>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>