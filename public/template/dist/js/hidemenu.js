const menu = document.getElementById('menu');
const btn = document.getElementById('btnMenu');
btn.addEventListener('click', function () {
  if (menu.classList.contains('hide')) {
    menu.classList.remove('hide');
    menu.classList.add('show');
  } else {
    menu.classList.remove('show');
    menu.classList.add('hide');
  }
})