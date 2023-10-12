<?php $uri = service('uri'); { ?>
  <header class="w-full h-16 bg-gray-50 shadow shadow-green-200/50 fixed z-10 mb-20 top-0 ">
    <div class="flex items-center justify-between h-full w-11/12 md:w-9/12 mx-auto relative">
      <a href="/" class="uppercase text-green-400 font-semibold text-lg flex items-center space-x-1">
        <img src="<?= base_url(); ?>template/dist/img/logo.png" alt="logo" class="w-6"><span>myfolder</span>
      </a>
      <ul class="transisi ease-in md:translate-x-0 translate-x-full  flex capitalize md:py-0 md:flex-row md:min-h-0 md:bg-transparent md:w-auto md:items-center gap-1 menusm  md:shadow-none md:static">
        <button id="btnCloseSidebar" class="absolute md:hidden top-3 right-5 p-2 rounded text-green-500 transisi focus:ring focus:ring-green-300 focus:ring-offset-2 focus:bg-green-200 hover:bg-green-200 bg-green-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
            <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
          </svg>
        </button>
        <li class="group w-full">
          <a href="/" class="px-3 py-2 transisi hover:bg-green-200 rounded text-green-500 w-full block <?= $uri->getSegment(1) == '' ? 'menu-active' : '' ?>">Home</a>
        </li>
        <li class="group w-full">
          <a href="blog" class="px-3 py-2 transisi hover:bg-green-200 rounded text-green-500 w-full block <?= $uri->getSegment(1) == 'blog' ? 'menu-active' : '' ?> ">Blog</a>
        </li>
        <li class="group w-full">
          <a href="<?= base_url(); ?>about" class="px-3 py-2 transisi hover:bg-green-200 rounded text-green-500 w-full block <?= $uri->getSegment(1) == 'about' ? 'menu-active' : '' ?> ">Tentang</a>
        </li>
        <li class="group w-full">
          <a href="contact" class="px-3 py-2 transisi hover:bg-green-200 rounded text-green-500 w-full block <?= $uri->getSegment(1) == 'contact' ? 'menu-active' : '' ?> ">Hubungi</a>
        </li>
        <li class="group w-full">
          <a href="apps" class="px-3 py-2 transisi hover:bg-green-200 rounded text-green-500 w-full block <?= $uri->getSegment(1) == 'apps' ? 'menu-active' : '' ?> ">aplikasi</a>
        </li>
        <li class="group w-full">
          <a href="admin" class="px-3 py-2 transisi hover:bg-green-200 rounded text-green-500 w-full block <?= $uri->getSegment(1) == 'admin' ? 'menu-active' : '' ?> ">admin</a>
        </li>
      </ul>
      <button id="btnOpenSidebar" class="block md:hidden p-2 rounded text-green-500 transisi focus:ring focus:ring-green-300 focus:ring-offset-2 focus:bg-green-200 hover:bg-green-200">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
          <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
        </svg>
      </button>
    </div>
  </header>
<?php } ?>