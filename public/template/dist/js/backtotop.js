const scrollToTopButton = document.getElementById('scrollToTop');

// Fungsi untuk menggulir kembali ke atas halaman
function scrollToTop() {
  if (document.documentElement.scrollTop > 0) {
    // Menggunakan requestAnimationFrame untuk animasi yang lebih mulus
    window.scrollTo(0, 0); // Menggulir sedikit demi sedikit
  } else {
    // Jika sudah berada di atas, sembunyikan tombol
    scrollToTopButton.classList.add('hidden');
    scrollToTopButton.classList.remove('flex');
  }
}

// Event listener untuk menggulir kembali ketika tombol diklik
scrollToTopButton.addEventListener('click', scrollToTop);

// Event listener untuk menampilkan/menyembunyikan tombol berdasarkan posisi scroll dan tinggi halaman vs h-screen
function updateScrollButtonVisibility() {
  const isScrollable = document.documentElement.scrollHeight > window.innerHeight;

  if (isScrollable) {
    if (document.documentElement.scrollTop > 100) {
      scrollToTopButton.classList.remove('hidden');
      scrollToTopButton.classList.add('flex');
    } else {
      scrollToTopButton.classList.add('hidden');
      scrollToTopButton.classList.remove('flex');
    }
  } else {
    scrollToTopButton.classList.add('hidden');
    scrollToTopButton.classList.remove('flex');
  }
}

// Panggil fungsi saat halaman dimuat, saat jendela diubah ukuran, dan saat jendela di-scroll
window.addEventListener('load', updateScrollButtonVisibility);
window.addEventListener('resize', updateScrollButtonVisibility);
window.addEventListener('scroll', updateScrollButtonVisibility);

// Panggil fungsi saat halaman dimuat untuk memastikan keadaan awal
window.addEventListener('load', updateScrollButtonVisibility);
