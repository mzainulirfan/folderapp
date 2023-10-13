<?= $this->extend('admin/layout'); ?>
<?= $this->section('contentAdmin'); ?>
<h1 class="title-page">Product</h1>
<!-- card  -->
<div class="w-full grid grid-cols-2 md:grid-cols-4 gap-2">
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
        <span class="text-gray-400 whitespace-nowrap">since last week</span>
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
        <span class="text-gray-400 whitespace-nowrap">since last week</span>
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
        <span class="text-gray-400 whitespace-nowrap">since last week</span>
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
        <span class="block text-gray-700">Inactive Product</span>
      </div>
      <p class="text-4xl ml-4 text-gray-500 font-montserrat font-medium">5</p>
      <p class="ml-4 text-xs font-light text-orange-500 flex items-center gap-1">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-down-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1H3.707L13.854 2.854a.5.5 0 0 0-.708-.708L3 12.293V7.5a.5.5 0 0 0-1 0v6z" />
          </svg>
        </span>
        <span class="font-montserrat">-10%</span>
        <span class="text-gray-400 whitespace-nowrap">since last week</span>
      </p>
    </div>
    <div class="p-4 bg-green-500/10 text-green-500 hover:bg-green-500/30 transisi rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam group-hover:scale-150 transisi" viewBox="0 0 16 16">
        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
      </svg>
    </div>
  </a>
</div>
<div class="flex items-start flex-wrap md:flex-nowrap gap-3 mt-6">
  <!-- table  -->
  <div class=" border p-4 rounded-md bg-white w-full md:w-8/12">
    <div class="flex items-center justify-between">
      <h1 class="title-card">
        Product list
      </h1>
      <div class="flex items-center gap-2">
        <button class="px-4 py-2 rounded bg-neutral-100 focus:ring focus:ring-neutral-200 text-neutral-700">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
            <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
        <a href="<?= base_url(); ?>product/new" class="flex items-center space-x-2 px-4 text-white py-1 bg-green-500 rounded hover:bg-opacity-80 transisi">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
            </svg>
          </span>
          <span>New Product</span>
        </a>
      </div>
    </div>
    <div class="relative overflow-x-auto mt-4 border rounded-md">
      <table class="w-full table-auto text-left" aria-describedby="list of product">
        <thead class="border-b bg-gray-100/50 h-16">
          <tr>
            <th scope="col" class="whitespace-nowrap px-6 py-3">
              Product name
            </th>
            <th scope="col" class="whitespace-nowrap px-6 py-3">
              Price
            </th>
            <th scope="col" class="whitespace-nowrap px-6 py-3">
              status
            </th>
            <th scope="col" class="whitespace-nowrap px-6 py-3">
              action
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class=" border-b group">
            <td class="whitespace-nowrap px-6 py-2">
              <a href="" class="hover:text-green-500 transisi flex items-center gap-2">
                <figure class="w-10 h-10 bg-neutral-300 rounded-md overflow-hidden">
                  <img src="<?= base_url(); ?>template/dist/img/products/product1.jpg" alt="product1" class="h-full object-cover object-center group-hover:scale-150 transisi">
                </figure>
                Apple MacBook Pro 17"
              </a>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <p class="font-montserrat">$2999</p>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <span class="px-2 inline-block text-green-700 bg-green-400/50 rounded">active</span>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <div class="p-2 flex flex-row gap-1 items-center justify-center">
                <button type="button" class="text-green-500 p-2 hover:bg-green-500/20 focus:ring focus:ring-green-500/50 rounded ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>
                </button>
                <button type="button" class="text-red-500 p-2 hover:bg-red-500/20 focus:ring focus:ring-red-500/50 rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                  </svg>
                </button>
              </div>
            </td>
          </tr>
          <tr class=" border-b  group">
            <td class="whitespace-nowrap px-6 py-2">
              <a href="" class="hover:text-green-500 transisi flex items-center gap-2">
                <figure class="w-10 h-10 bg-neutral-300 rounded-md overflow-hidden">
                  <img src="<?= base_url(); ?>template/dist/img/products/product1.jpg" alt="product1" class="h-full object-cover object-center group-hover:scale-150 transisi">
                </figure>
                Apple MacBook Pro 17"
              </a>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <p class="font-montserrat">$2999</p>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <span class="px-2 inline-block text-green-700 bg-green-400/50 rounded">active</span>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <div class="p-2 flex flex-row gap-1 items-center justify-center">
                <button type="button" class="text-green-500 p-2 hover:bg-green-500/20 focus:ring focus:ring-green-500/50 rounded ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>
                </button>
                <button type="button" class="text-red-500 p-2 hover:bg-red-500/20 focus:ring focus:ring-red-500/50 rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                  </svg>
                </button>
              </div>
            </td>
          </tr>
          <tr class=" border-b  group">
            <td class="whitespace-nowrap px-6 py-2">
              <a href="" class="hover:text-green-500 transisi flex items-center gap-2">
                <figure class="w-10 h-10 bg-neutral-300 rounded-md overflow-hidden">
                  <img src="<?= base_url(); ?>template/dist/img/products/product1.jpg" alt="product1" class="h-full object-cover object-center group-hover:scale-150 transisi">
                </figure>
                Apple MacBook Pro 17"
              </a>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <p class="font-montserrat">$2999</p>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <span class="px-2 inline-block text-orange-700 bg-orange-400/50 rounded">sold</span>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <div class="p-2 flex flex-row gap-1 items-center justify-center">
                <button type="button" class="text-green-500 p-2 hover:bg-green-500/20 focus:ring focus:ring-green-500/50 rounded ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>
                </button>
                <button type="button" class="text-red-500 p-2 hover:bg-red-500/20 focus:ring focus:ring-red-500/50 rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                  </svg>
                </button>
              </div>
            </td>
          </tr>
          <tr class=" border-b  group">
            <td class="whitespace-nowrap px-6 py-2">
              <a href="" class="hover:text-green-500 transisi flex items-center gap-2">
                <figure class="w-10 h-10 bg-neutral-300 rounded-md overflow-hidden">
                  <img src="<?= base_url(); ?>template/dist/img/products/product1.jpg" alt="product1" class="h-full object-cover object-center group-hover:scale-150 transisi">
                </figure>
                Apple MacBook Pro 17"
              </a>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <p class="font-montserrat">$2999</p>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <span class="px-2 inline-block text-gray-700 bg-gray-400/50 rounded">inactive</span>
            </td>
            <td class="whitespace-nowrap px-6 py-2">
              <div class="p-2 flex flex-row gap-1 items-center justify-center">
                <button type="button" class="text-green-500 p-2 hover:bg-green-500/20 focus:ring focus:ring-green-500/50 rounded ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>
                </button>
                <button type="button" class="text-red-500 p-2 hover:bg-red-500/20 focus:ring focus:ring-red-500/50 rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                  </svg>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- top product  -->
  <div class="border p-4 rounded-md bg-white w-full md:w-4/12">
    <h1 class="text-gray-700 text-xl font-semibold mb-5">
      Top 5 product
    </h1>
    <div class="group flex items-center justify-between py-2 border-b">
      <a href="" class="flex items-center gap-2 hover:text-green-500 transisi">
        <figure class="w-10 h-10 bg-neutral-300 rounded-md overflow-hidden">
          <img src="<?= base_url(); ?>template/dist/img/products/product1.jpg" alt="product1" class="h-full object-cover object-center group-hover:scale-150 transisi">
        </figure>
        <h3>iphone 15 pro</h3>
      </a>
      <p class="font-semibold text-green-500 font-montserrat">Rp. 200K</p>
    </div>
    <div class="group flex items-center justify-between py-2 border-b">
      <a href="" class="flex items-center gap-2 hover:text-green-500 transisi">
        <figure class="w-10 h-10 bg-neutral-300 rounded-md overflow-hidden">
          <img src="<?= base_url(); ?>template/dist/img/products/product3.jpg" alt="product3" class="h-full object-cover object-center group-hover:scale-150 transisi">
        </figure>
        <h3>Ipad mini</h3>
      </a>
      <p class="font-semibold text-green-500 font-montserrat">Rp. 100K</p>
    </div>
    <div class="group flex items-center justify-between py-2 border-b">
      <a href="" class="flex items-center gap-2 hover:text-green-500 transisi">
        <figure class="w-10 h-10 bg-neutral-300 rounded-md overflow-hidden">
          <img src="<?= base_url(); ?>template/dist/img/products/product2.jpg" alt="product2" class="h-full object-cover object-center group-hover:scale-150 transisi">
        </figure>
        <h3>macbook pro</h3>
      </a>
      <p class="font-semibold text-green-500 font-montserrat">Rp. 500K</p>
    </div>
    <div class="group flex items-center justify-between py-2 border-b">
      <a href="" class="flex items-center gap-2 hover:text-green-500 transisi">
        <figure class="w-10 h-10 bg-neutral-300 rounded-md overflow-hidden">
          <img src="<?= base_url(); ?>template/dist/img/products/product2.jpg" alt="product2" class="h-full object-cover object-center group-hover:scale-150 transisi">
        </figure>
        <h3>macbook pro</h3>
      </a>
      <p class="font-semibold text-green-500 font-montserrat">Rp. 500K</p>
    </div>
    <div class="group flex items-center justify-between py-2 border-b">
      <a href="" class="flex items-center gap-2 hover:text-green-500 transisi">
        <figure class="w-10 h-10 bg-neutral-300 rounded-md overflow-hidden">
          <img src="<?= base_url(); ?>template/dist/img/products/product2.jpg" alt="product2" class="h-full object-cover object-center group-hover:scale-150 transisi">
        </figure>
        <h3>macbook pro</h3>
      </a>
      <p class="font-semibold text-green-500 font-montserrat">Rp. 500K</p>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>