<?= $this->extend('layout/index'); ?>
<?= $this->section('content'); ?>
<!-- on tranding  -->
<div class="flex justify-between items-center mb-6">
  <div class="flex items-center flex-wrap gap-2 group bg-green-200 px-4 rounded-full">
    <a href="" class="flex justify-center flex-shrink-0 items-center text-xs gap-2 text-green-500">
      <span class="w-2 h-2 bg-green-500 rounded-full"></span>
      <span class=" transisi group-hover:text-green-500">Lorem ipsum dolor sit amet consectetur.</span>
    </a>
  </div>
  <div class="flex items-center ">
    <button type="button" class="h-6 w-6 bg-green-50 flex items-center justify-center rounded cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
      </svg>
    </button>
    <button type="button" class="h-6 w-6 bg-green-50 flex items-center justify-center rounded cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
      </svg>
    </button>
  </div>
</div>

<div class="flex flex-wrap gap-2 mb-6 lg:mb-20">
  <div class="md:flex-1 w-full relative overflow-hidden group">
    <figure class="w-full h-[500px] overflow-hidden rounded-xl shadow-md ">
      <img src="<?= base_url(); ?>template/dist/img/images/img2.jpg" alt="image1" class="group-hover:scale-125 transisi object-cover object-top">
    </figure>
    <div class="absolute top-4 left-4 ">
      <span class="px-4 py-0.5 text-xs font-semibold capitalize text-white bg-red-500 block rounded-full">tranding</span>
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/10 rounded-xl"></div>
    <div class="absolute bottom-6 left-4">
      <a href="" class="inline-block drop-shadow-2xl title-article text-white  font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing</a>
      <p class="text-white text-xs -mt-4 capitalize">
        <span>nahla aufa</span>
        <span> - </span>
        <span> 11 Oktober 2023 </span>
      </p>
    </div>
  </div>
  <div class=" md:flex-1 w-full gap-2  flex flex-col">
    <div class=" overflow-hidden flex-1 rounded-xl  relative group">
      <img src="<?= base_url(); ?>template/dist/img/images/img1.jpg" alt="img1" class="w-full h-[250px] object-cover object-center transisi group-hover:scale-110">
      <div class="absolute top-4 left-4 ">
        <span class="px-4 py-0.5 text-xs font-semibold capitalize text-white bg-green-500 block rounded-full">gadget</span>
      </div>
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/10 rounded-xl"></div>
      <div class="absolute bottom-6 left-4">
        <a href="" class="inline-block drop-shadow-2xl text-2xl text-white  font-semibold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing</a>
        <p class="text-white text-xs capitalize">
          <span>Zara naila</span>
          <span> - </span>
          <span> 11 Oktober 2023 </span>
        </p>
      </div>
    </div>
    <div class="w-full md:flex-1 rounded-xl flex gap-2">
      <div class="md:flex-1 w-full relative overflow-hidden group">
        <figure class="w-full h-[250px] overflow-hidden rounded-xl shadow-md ">
          <img src="<?= base_url(); ?>template/dist/img/images/img4.jpg" alt="image1" class="h-full group-hover:scale-125 transisi object-cover object-top">
        </figure>
        <div class="absolute top-4 left-4 ">
          <span class="px-4 py-0.5 text-xs font-semibold capitalize text-white bg-yellow-500 block rounded-full">market</span>
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/10 rounded-xl"></div>
        <div class="absolute bottom-6 left-4">
          <a href="" class="inline-block mb-2 drop-shadow-2xl text-lg text-white  font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing</a>
          <p class="text-white text-xs 4 capitalize">
            <span>nahla aufa</span>
            <span> - </span>
            <span> 11 Oktober 2023 </span>
          </p>
        </div>
      </div>
      <div class="md:flex-1 w-full relative overflow-hidden group">
        <figure class="w-full h-[250px] overflow-hidden rounded-xl shadow-md ">
          <img src="<?= base_url(); ?>template/dist/img/images/img3.jpg" alt="image1" class="h-full group-hover:scale-125 transisi object-cover object-top">
        </figure>
        <div class="absolute top-4 left-4 ">
          <span class="px-4 py-0.5 text-xs font-semibold capitalize text-white bg-blue-500 block rounded-full">tranding</span>
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/10 rounded-xl"></div>
        <div class="absolute bottom-6 left-4">
          <a href="" class="inline-block mb-2 drop-shadow-2xl text-lg text-white  font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing</a>
          <p class="text-white text-xs 4 capitalize">
            <span>nahla aufa</span>
            <span> - </span>
            <span> 11 Oktober 2023 </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="mb-20">
  <div class="border-b-2 mb-6 border-green-400/50">
    <h1 class="px-2 py-0.5 bg-green-400/50 inline-block capitalize text-green-500">tulisan terbaru</h1>
  </div>
  <div class="mb-6 flex flex-wrap md:flex-nowrap gap-4 group">
    <figure class="w-full md:w-4/12 rounded-md overflow-hidden relative">
      <img src="<?= base_url(); ?>template/dist/img/images/img5.jpg" alt="img5" class="h-[200px] w-full object-cover group-hover:scale-110 transisi">
      <div class="absolute top-4 left-4 ">
        <span class="px-4 py-0.5 text-xs font-semibold capitalize text-white bg-green-500 block rounded-full">gadget</span>
      </div>
    </figure>
    <div class="w-full md:w-8/12 flex flex-col items-start">
      <a href="" class="title-article group-hover:text-green-400 transisi">Lorem ipsum dolor sit amet consectetur.</a>
      <p class="block -mt-2 mb-3 text-slate-400 text-xs">
        <span>nahla aufa</span>
        <span> - </span>
        <span>11 Oktober 2023</span>
      </p>
      <article class="text-slate-500 flex-1">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam fuga corporis nesciunt iure vel aspernatur voluptatem quae obcaecati, eum possimus?
      </article>
      <a href="" class="rounded shadow-md hover:bg-green-300 text-green-500 font-semibold text-xs px-2 py-2 bg-green-200 inline-block">read more</a>
    </div>
  </div>
  <div class="mb-6 flex flex-wrap md:flex-nowrap gap-4 group">
    <figure class="w-full md:w-4/12 rounded-md overflow-hidden relative">
      <img src="<?= base_url(); ?>template/dist/img/images/img6.jpg" alt="img5" class="h-[200px] w-full object-cover group-hover:scale-110 transisi">
      <div class="absolute top-4 left-4 ">
        <span class="px-4 py-0.5 text-xs font-semibold capitalize text-white bg-green-500 block rounded-full">otomotif</span>
      </div>
    </figure>
    <div class="w-full md:w-8/12 flex flex-col items-start">
      <a href="" class="title-article group-hover:text-green-400 transisi">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a>
      <p class="block -mt-2 mb-3 text-slate-400 text-xs">
        <span>nahla aufa</span>
        <span> - </span>
        <span>11 Oktober 2023</span>
      </p>
      <article class="text-slate-500 flex-1">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam fuga corporis nesciunt iure vel aspernatur voluptatem quae obcaecati, eum possimus?
      </article>
      <a href="" class="rounded shadow-md hover:bg-green-300 text-green-500 font-semibold text-xs px-2 py-2 bg-green-200 inline-block">read more</a>
    </div>
  </div>
</section>
<!-- <div>
  <h1 class="title">Lorem ipsum dolor sit.</h1>
  <article class="text-content">
    <p class="mb-2">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum necessitatibus, obcaecati modi dolor fugit illum voluptates quidem laboriosam, odit, iure doloribus voluptate fugiat cumque ipsam nobis aut quod facere asperiores porro molestiae cupiditate. Est architecto error velit voluptatum ratione. Esse est qui exercitationem et incidunt facere, asperiores molestias eaque sunt, ipsam facilis. Ratione eaque consequuntur asperiores! Assumenda rerum ex adipisci neque, nisi laudantium soluta iste ut dolorum blanditiis aspernatur magnam, cumque magni! Nihil, ullam, repellat aspernatur saepe commodi totam quisquam rerum,
    </p>
    aliquam quod odit doloremque neque laborum odio culpa delectus dolorem velit veritatis explicabo unde! Aspernatur alias facilis voluptas. Quos laboriosam, velit veritatis expedita beatae in amet, modi voluptas repudiandae quibusdam suscipit aliquam exercitationem asperiores ex id itaque quasi officia? Reprehenderit nemo, obcaecati laboriosam, labore quae alias ad explicabo dolore praesentium, illo cupiditate esse? Totam nemo error illum maiores neque laudantium corrupti sed recusandae, non ducimus impedit asperiores atque unde amet adipisci deserunt veniam reiciendis sapiente? Dolore in adipisci at animi beatae recusandae iste eligendi ipsa
    <p class="mb-2">
      dolor voluptate? Obcaecati illum debitis quis asperiores fugiat excepturi officia minus corporis laboriosam exercitationem harum non, odio fugit odit quasi aspernatur nam molestias iusto, ad ratione in? Asperiores modi animi iure accusantium error voluptatibus minima ipsam vel impedit autem, assumenda voluptas necessitatibus saepe aspernatur nesciunt recusandae aliquid, alias eius quos distinctio vero. Sapiente, architecto amet suscipit voluptatum consectetur illo officiis unde explicabo cupiditate ad praesentium fuga dignissimos, laborum earum repellat id impedit quae a odit iure deleniti ex voluptate!
    </p>
    <p class="mb-2">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum necessitatibus, obcaecati modi dolor fugit illum voluptates quidem laboriosam, odit, iure doloribus voluptate fugiat cumque ipsam nobis aut quod facere asperiores porro molestiae cupiditate. Est architecto error velit voluptatum ratione. Esse est qui exercitationem et incidunt facere, asperiores molestias eaque sunt, ipsam facilis. Ratione eaque consequuntur asperiores! Assumenda rerum ex adipisci neque, nisi laudantium soluta iste ut dolorum blanditiis aspernatur magnam, cumque magni! Nihil, ullam, repellat aspernatur saepe commodi totam quisquam rerum,
    </p>
    aliquam quod odit doloremque neque laborum odio culpa delectus dolorem velit veritatis explicabo unde! Aspernatur alias facilis voluptas. Quos laboriosam, velit veritatis expedita beatae in amet, modi voluptas repudiandae quibusdam suscipit aliquam exercitationem asperiores ex id itaque quasi officia? Reprehenderit nemo, obcaecati laboriosam, labore quae alias ad explicabo dolore praesentium, illo cupiditate esse? Totam nemo error illum maiores neque laudantium corrupti sed recusandae, non ducimus impedit asperiores atque unde amet adipisci deserunt veniam reiciendis sapiente? Dolore in adipisci at animi beatae recusandae iste eligendi ipsa
    <p class="mb-2">
      dolor voluptate? Obcaecati illum debitis quis asperiores fugiat excepturi officia minus corporis laboriosam exercitationem harum non, odio fugit odit quasi aspernatur nam molestias iusto, ad ratione in? Asperiores modi animi iure accusantium error voluptatibus minima ipsam vel impedit autem, assumenda voluptas necessitatibus saepe aspernatur nesciunt recusandae aliquid, alias eius quos distinctio vero. Sapiente, architecto amet suscipit voluptatum consectetur illo officiis unde explicabo cupiditate ad praesentium fuga dignissimos, laborum earum repellat id impedit quae a odit iure deleniti ex voluptate!
    </p>
    <p class="mb-2">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum necessitatibus, obcaecati modi dolor fugit illum voluptates quidem laboriosam, odit, iure doloribus voluptate fugiat cumque ipsam nobis aut quod facere asperiores porro molestiae cupiditate. Est architecto error velit voluptatum ratione. Esse est qui exercitationem et incidunt facere, asperiores molestias eaque sunt, ipsam facilis. Ratione eaque consequuntur asperiores! Assumenda rerum ex adipisci neque, nisi laudantium soluta iste ut dolorum blanditiis aspernatur magnam, cumque magni! Nihil, ullam, repellat aspernatur saepe commodi totam quisquam rerum,
    </p>
    aliquam quod odit doloremque neque laborum odio culpa delectus dolorem velit veritatis explicabo unde! Aspernatur alias facilis voluptas. Quos laboriosam, velit veritatis expedita beatae in amet, modi voluptas repudiandae quibusdam suscipit aliquam exercitationem asperiores ex id itaque quasi officia? Reprehenderit nemo, obcaecati laboriosam, labore quae alias ad explicabo dolore praesentium, illo cupiditate esse? Totam nemo error illum maiores neque laudantium corrupti sed recusandae, non ducimus impedit asperiores atque unde amet adipisci deserunt veniam reiciendis sapiente? Dolore in adipisci at animi beatae recusandae iste eligendi ipsa
    <p class="mb-2">
      dolor voluptate? Obcaecati illum debitis quis asperiores fugiat excepturi officia minus corporis laboriosam exercitationem harum non, odio fugit odit quasi aspernatur nam molestias iusto, ad ratione in? Asperiores modi animi iure accusantium error voluptatibus minima ipsam vel impedit autem, assumenda voluptas necessitatibus saepe aspernatur nesciunt recusandae aliquid, alias eius quos distinctio vero. Sapiente, architecto amet suscipit voluptatum consectetur illo officiis unde explicabo cupiditate ad praesentium fuga dignissimos, laborum earum repellat id impedit quae a odit iure deleniti ex voluptate!
    </p>
    <p class="mb-2">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum necessitatibus, obcaecati modi dolor fugit illum voluptates quidem laboriosam, odit, iure doloribus voluptate fugiat cumque ipsam nobis aut quod facere asperiores porro molestiae cupiditate. Est architecto error velit voluptatum ratione. Esse est qui exercitationem et incidunt facere, asperiores molestias eaque sunt, ipsam facilis. Ratione eaque consequuntur asperiores! Assumenda rerum ex adipisci neque, nisi laudantium soluta iste ut dolorum blanditiis aspernatur magnam, cumque magni! Nihil, ullam, repellat aspernatur saepe commodi totam quisquam rerum,
    </p>
    aliquam quod odit doloremque neque laborum odio culpa delectus dolorem velit veritatis explicabo unde! Aspernatur alias facilis voluptas. Quos laboriosam, velit veritatis expedita beatae in amet, modi voluptas repudiandae quibusdam suscipit aliquam exercitationem asperiores ex id itaque quasi officia? Reprehenderit nemo, obcaecati laboriosam, labore quae alias ad explicabo dolore praesentium, illo cupiditate esse? Totam nemo error illum maiores neque laudantium corrupti sed recusandae, non ducimus impedit asperiores atque unde amet adipisci deserunt veniam reiciendis sapiente? Dolore in adipisci at animi beatae recusandae iste eligendi ipsa
    <p class="mb-2">
      dolor voluptate? Obcaecati illum debitis quis asperiores fugiat excepturi officia minus corporis laboriosam exercitationem harum non, odio fugit odit quasi aspernatur nam molestias iusto, ad ratione in? Asperiores modi animi iure accusantium error voluptatibus minima ipsam vel impedit autem, assumenda voluptas necessitatibus saepe aspernatur nesciunt recusandae aliquid, alias eius quos distinctio vero. Sapiente, architecto amet suscipit voluptatum consectetur illo officiis unde explicabo cupiditate ad praesentium fuga dignissimos, laborum earum repellat id impedit quae a odit iure deleniti ex voluptate!
    </p>
  </article>
</div> -->
<?= $this->endSection(); ?>