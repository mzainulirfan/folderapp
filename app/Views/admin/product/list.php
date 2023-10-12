<?= $this->extend('admin/layout'); ?>
<?= $this->section('contentAdmin'); ?>
<h1 class="text-2xl font-medium leading-7 text-slate-800 ">Product</h1>
<div class="w-full mt-6 grid  grid-cols-2 md:grid-cols-4 gap-2">
  <!-- all product -->
  <a href="" class="p-4 bg-white group flex-1 border rounded-md flex items-start justify-between hover:shadow-lg hover:shadow-green-500/30 transisi">
    <div class="flex flex-col">
      <div class="flex items-center space-x-2">
        <span class="w-2 h-2 block flex-shrink-0 bg-gray-700 rounded-full"></span>
        <span class="block text-gray-700">Products</span>
      </div>
      <p class="text-4xl ml-4 text-gray-700 font-montserrat font-medium">120</p>
      <p class="ml-4 text-xs font-light text-green-500 flex items-center gap-1">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
          </svg>
        </span>
        <span class="font-montserrat">+10%</span>
        <span class="text-gray-400">vs last week</span>
      </p>
    </div>
    <div class="p-4 bg-green-500/10 text-green-500 hover:bg-green-500/30 transisi rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam group-hover:scale-150 transisi" viewBox="0 0 16 16">
        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
      </svg>
    </div>
  </a>
  <!-- active product -->
  <a href="" class="p-4 bg-white group flex-1 border rounded-md flex items-start justify-between hover:shadow-lg hover:shadow-green-500/30 transisi">
    <div class="flex flex-col">
      <div class="flex items-center space-x-2">
        <span class="w-2 h-2 block flex-shrink-0 bg-green-500 rounded-full"></span>
        <span class="block text-gray-700">Active Product</span>
      </div>
      <p class="text-4xl ml-4 text-green-500 font-montserrat font-medium">75</p>
      <p class="ml-4 text-xs font-light text-orange-500 flex items-center gap-1">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-down-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1H3.707L13.854 2.854a.5.5 0 0 0-.708-.708L3 12.293V7.5a.5.5 0 0 0-1 0v6z" />
          </svg>
        </span>
        <span class="font-montserrat">-12%</span>
        <span class="text-gray-400">vs last week</span>
      </p>
    </div>
    <div class="p-4 bg-green-500/10 text-green-500 hover:bg-green-500/30 transisi rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam group-hover:scale-150 transisi" viewBox="0 0 16 16">
        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
      </svg>
    </div>
  </a>
  <!-- sold product  -->
  <a href="" class="p-4 bg-white group flex-1 border rounded-md flex items-start justify-between hover:shadow-lg hover:shadow-green-500/30 transisi">
    <div class="flex flex-col">
      <div class="flex items-center space-x-2">
        <span class="w-2 h-2 block flex-shrink-0 bg-red-800 rounded-full"></span>
        <span class="block text-gray-700">Sold Out Product</span>
      </div>
      <p class="text-4xl ml-4 text-red-800 font-montserrat font-medium">5</p>
      <p class="ml-4 text-xs font-light text-orange-500 flex items-center gap-1">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-down-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1H3.707L13.854 2.854a.5.5 0 0 0-.708-.708L3 12.293V7.5a.5.5 0 0 0-1 0v6z" />
          </svg>
        </span>
        <span class="font-montserrat">-10%</span>
        <span class="text-gray-400">vs last week</span>
      </p>
    </div>
    <div class="p-4 bg-green-500/10 text-green-500 hover:bg-green-500/30 transisi rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam group-hover:scale-150 transisi" viewBox="0 0 16 16">
        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
      </svg>
    </div>
  </a>
  <!-- inactive product  -->
  <a href="" class="p-4 bg-white group flex-1 border rounded-md flex items-start justify-between hover:shadow-lg hover:shadow-green-500/30 transisi">
    <div class="flex flex-col">
      <div class="flex items-center space-x-2">
        <span class="w-2 h-2 block flex-shrink-0 bg-gray-300 rounded-full"></span>
        <span class="block text-gray-700">Sold Out Product</span>
      </div>
      <p class="text-4xl ml-4 text-gray-500 font-montserrat font-medium">5</p>
      <p class="ml-4 text-xs font-light text-orange-500 flex items-center gap-1">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-down-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1H3.707L13.854 2.854a.5.5 0 0 0-.708-.708L3 12.293V7.5a.5.5 0 0 0-1 0v6z" />
          </svg>
        </span>
        <span class="font-montserrat">-10%</span>
        <span class="text-gray-400">vs last week</span>
      </p>
    </div>
    <div class="p-4 bg-green-500/10 text-green-500 hover:bg-green-500/30 transisi rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam group-hover:scale-150 transisi" viewBox="0 0 16 16">
        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
      </svg>
    </div>
  </a>
</div>
<div class="mt-6 border p-4 rounded-md bg-white">
  <div class="flex items-center justify-between">
    <h1 class="text-gray-700 text-xl font-semibold">
      Product list
    </h1>
    <a href="" class="flex items-center space-x-2 px-4 text-white py-1 bg-green-500 rounded">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
        </svg>
      </span>
      <span>New Product</span>
    </a>
  </div>
  <div class="relative overflow-x-auto mt-4 border rounded-md">
    <table class="w-full text-left" aria-describedby="list of product">
      <thead class="border-b bg-gray-100/50 h-16">
        <tr>
          <th scope="col" class="px-6 py-3">
            Product name
          </th>
          <th scope="col" class="px-6 py-3">
            Category
          </th>
          <th scope="col" class="px-6 py-3">
            Price
          </th>
          <th scope="col" class="px-6 py-3">
            status
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class=" border-b ">
          <td class="px-6 py-4">
            Apple MacBook Pro 17"
          </td>
          <td class="px-6 py-4">
            Laptop
          </td>
          <td class="px-6 py-4">
            $2999
          </td>
          <td class="px-6 py-4">
            active
          </td>
        </tr>
        <tr class=" border-b ">
          <td class="px-6 py-4">
            Apple MacBook Pro 17"
          </td>
          <td class="px-6 py-4">
            Laptop
          </td>
          <td class="px-6 py-4">
            $2999
          </td>
          <td class="px-6 py-4">
            active
          </td>
        </tr>
        <tr class=" border-b ">
          <td class="px-6 py-4">
            Apple MacBook Pro 17"
          </td>
          <td class="px-6 py-4">
            Laptop
          </td>
          <td class="px-6 py-4">
            $2999
          </td>
          <td class="px-6 py-4">
            active
          </td>
        </tr>
        <tr class=" border-b ">
          <td class="px-6 py-4">
            Apple MacBook Pro 17"
          </td>
          <td class="px-6 py-4">
            Laptop
          </td>
          <td class="px-6 py-4">
            $2999
          </td>
          <td class="px-6 py-4">
            active
          </td>
        </tr>
        <tr class=" border-b ">
          <td class="px-6 py-4">
            Apple MacBook Pro 17"
          </td>
          <td class="px-6 py-4">
            Laptop
          </td>
          <td class="px-6 py-4">
            $2999
          </td>
          <td class="px-6 py-4">
            active
          </td>
        </tr>
        <tr class=" border-b ">
          <td class="px-6 py-4">
            Apple MacBook Pro 17"
          </td>
          <td class="px-6 py-4">
            Laptop
          </td>
          <td class="px-6 py-4">
            $2999
          </td>
          <td class="px-6 py-4">
            active
          </td>
        </tr>
        <tr class=" border-b ">
          <td class="px-6 py-4">
            Apple MacBook Pro 17"
          </td>
          <td class="px-6 py-4">
            Laptop
          </td>
          <td class="px-6 py-4">
            $2999
          </td>
          <td class="px-6 py-4">
            active
          </td>
        </tr>
        <tr class=" border-b ">
          <td class="px-6 py-4">
            Apple MacBook Pro 17"
          </td>
          <td class="px-6 py-4">
            Laptop
          </td>
          <td class="px-6 py-4">
            $2999
          </td>
          <td class="px-6 py-4">
            active
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>
<?= $this->endSection(); ?>