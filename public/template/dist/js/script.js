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

