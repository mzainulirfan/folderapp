<?= $this->extend('admin/layout'); ?>
<?= $this->section('contentAdmin'); ?>
<h1 class="title-page">New Product</h1>
<div class="mt-6">
  <div class="flex gap-6">
    <form action="" method="post" class="w-8/12">
      <div class="flex flex-col border rounded p-4 mb-4">
        <h1 class="title-card mb-4">
          Informasi Produk
        </h1>
        <div class="flex flex-col justify-center mb-4 gap-1">
          <label for="name" class="text-gray-400 font-semibold">Nama Product</label>
          <input type="text" name="nama" id="name" placeholder="nama product" class="focus:ring focus:ring-green-500/30 outline-none px-4 py-2 border rounded">
        </div>
        <div class="flex flex-col justify-center mb-4 gap-1">
          <label for="category" class="text-gray-400 font-semibold">Kategory</label>
          <select name="category" id="category" class="focus:ring focus:ring-green-500/30 outline-none px-4 py-2 border rounded ">
            <option value="" class="text-gray-400">kategory 1</option>
            <option value="" class="text-gray-400">kategory 2</option>
            <option value="" class="text-gray-400">kategory 3</option>
            <option value="" class="text-gray-400">kategory 4</option>
            <option value="" class="text-gray-400">kategory 5</option>
          </select>
        </div>
        <div class="flex flex-col justify-center mb-4 gap-1">
          <label for="descripsi" class="text-gray-400 font-semibold">Deskripsi Product</label>
          <textarea name="descripsi" id="descripsi" rows="5" class="focus:ring focus:ring-green-500/30 outline-none px-4 py-2 border rounded"></textarea>
        </div>
      </div>
      <div class="flex flex-col border rounded p-4 mb-4">
        <h1 class="title-card mb-4">
          Informasi penjualan
        </h1>
        <div class="flex flex-col justify-center mb-4 gap-1">
          <label for="price" class="text-gray-400 font-semibold">Harga</label>
          <input type="text" name="price" id="price" placeholder="Rp.1000" class="focus:ring focus:ring-green-500/30 outline-none px-4 py-2 border rounded">
        </div>
        <div class="flex flex-col justify-center mb-4 gap-1">
          <label for="stock" class="text-gray-400 font-semibold">Stok</label>
          <input type="text" name="stock" id="stock" placeholder="Stok" class="focus:ring focus:ring-green-500/30 outline-none px-4 py-2 border rounded">
        </div>
      </div>
      <div class="flex flex-col border rounded p-4 mb-4">
        <h1 class="title-card mb-4">
          Informasi Pengiriman
        </h1>
        <div class="flex flex-col justify-center mb-4 gap-1">
          <label for="weight" class="text-gray-400 font-semibold">Berat</label>
          <input type="text" name="weight" id="weight" placeholder="masukkan dalam gram" class="focus:ring focus:ring-green-500/30 outline-none px-4 py-2 border rounded">
        </div>
      </div>
      <div class="mb-4 flex items-center gap-2">
        <button type="button" class="px-4 py-2 focus:ring focus:ring-green-500/25 bg-green-500 rounded-md text-white font-semibold">Simpan dan tampilkan</button>
        <button type="button" class="px-4 py-2 focus:ring focus:ring-green-500/25 bg-neutral-100 rounded-md text-gray-500">Kembali</button>
      </div>
    </form>
    <div class="bg-white border p-4 rounded flex-1">
      status bar
    </div>
  </div>
</div>
<?= $this->endSection(); ?>