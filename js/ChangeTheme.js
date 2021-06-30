function ChangeTheme() {
  const toogleTheme = document.querySelector('.toggle-theme')
  let element = document.documentElement

  toogleTheme.addEventListener('click', () => {
    if (element.hasAttribute('data-theme')) {
      element.removeAttribute('data-theme')
      localStorage.removeItem('theme')
    } else {
      element.setAttribute('data-theme', 'dark')
      localStorage.setItem('theme', 'dark')
    }
  })

  if (localStorage.getItem('theme') != null) {
    element.setAttribute('data-theme', 'dark')
  }
}
ChangeTheme()