<?= $this->extend('layout/index'); ?>
<?= $this->section('content'); ?>
<h1 class="title">Hubungi kami</h1>
<p class="text-content">
  Selamat datang di halaman kontak saya! Saya senang mendengar dari Anda. Jangan ragu untuk menghubungi saya jika Anda memiliki pertanyaan, masukan, atau ingin berbicara lebih lanjut. Isi formulir di bawah ini, dan saya akan segera merespons Anda.
</p>
<div class="mt-6 my-12">
  <form action="" method="post" class=" shadow-lg p-8  rounded-lg flex flex-col  space-y-4">
    <div class=" flex flex-col space-y-2">
      <label for="fullname" class="text-slate-500">Nama lengkap</label>
      <input type="text" name="fullname" id="fullname" placeholder="Nama lengkap" class="text-green-500 outline-none border px-4 py-2 rounded-md focus:ring focus:ring-green-300/40 focus:ring-offset-2" autofocus>
    </div>
    <div class=" flex flex-col space-y-2">
      <label for="email" class="text-slate-500">Email</label>
      <input type="email" name="email" id="email" placeholder="mail@mail.com" class="text-green-500 outline-none border px-4 py-2 rounded-md focus:ring focus:ring-green-300/40 focus:ring-offset-2">
    </div>
    <div class=" flex flex-col space-y-2">
      <label for="pesan" class="text-slate-500">Pesan</label>
      <textarea name="pesan" id="pesan" rows="10" class="text-green-500 outline-none border px-4 py-2 rounded-md focus:ring focus:ring-green-300/40 focus:ring-offset-2"></textarea>
    </div>
    <button type="button" class="outline-none border px-4 py-2 rounded-md focus:ring focus:ring-green-300/40 focus:ring-offset-2 bg-green-500 text-white block">Kirim</button>
  </form>
</div>

<?= $this->endSection(); ?>