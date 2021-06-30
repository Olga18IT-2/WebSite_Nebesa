function Menu() {
  const menu_btn = document.querySelector('.header__btn-menu')
  menu_btn.addEventListener('click', () => {
  $('.menu ul').slideToggle();
  })
}
Menu()