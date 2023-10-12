const btnOpenSidebar = document.getElementById('btnOpenSidebar');
const btnCloseSidebar = document.getElementById('btnCloseSidebar');
const ulMenu = document.querySelector('.menusm');

// Fungsi untuk menampilkan atau menyembunyikan sidebar
function toggleSidebar() {
  ulMenu.classList.toggle('translate-x-full');
}

// Event listener untuk membuka sidebar
btnOpenSidebar.addEventListener('click', toggleSidebar);

// Event listener untuk menutup sidebar
btnCloseSidebar.addEventListener('click', toggleSidebar);

// Event listener untuk menangani tombol Ctrl + B
document.addEventListener('keydown', function (event) {
  // Memeriksa apakah tombol "B" ditekan dan bersamaan dengan tombol "Ctrl" (atau "Command" di Mac)
  if ((event.ctrlKey || event.metaKey) && event.key === 'b') {
    // Jalankan tugas yang sama seperti membuka sidebar
    toggleSidebar();
  }
});



// const menu = document.getElementById('menu');
// const btn = document.getElementById('btnMenu');
// btn.addEventListener('click', function () {
//   if (menu.classList.contains('hide')) {
//     menu.classList.remove('hide');
//     menu.classList.add('show');
//   } else {
//     menu.classList.remove('show');
//     menu.classList.add('hide');
//   }
// })
