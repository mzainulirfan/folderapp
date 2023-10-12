 <header class="flex w-full fixed top-0 z-[11] justify-between shadow-sm shadow-green-400/50 px-2 bg-gray-50 border-b h-14 items-center">
   <a href="/" class="uppercase text-green-400 font-semibold text-lg flex items-center space-x-1">
     <img src="<?= base_url(); ?>template/dist/img/logo.png" alt="logo" class="w-6"><span>myfolder</span>
   </a>
   <ul class="flex items-center gap-3">
     <!-- notification -->
     <li>
       <button class="p-2 bg-green-500/10 focus:ring focus:ring-green-400/30 items-center hover:bg-green-500/30 transisi text-green-500 rounded-full">
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
           <circle cx="18" cy="6" r="3"></circle>
           <path d="M18 19H5V6h8c0-.712.153-1.387.422-2H5c-1.103 0-2 .897-2 2v13c0 1.103.897 2 2 2h13c1.103 0 2-.897 2-2v-8.422A4.962 4.962 0 0 1 18 11v8z"></path>
         </svg>
         </a>
     </li>
     <!-- messages -->
     <li>
       <button class="relative p-2 bg-green-500/10 focus:ring  items-center focus:ring-green-400/30 hover:bg-green-500/30 transisi text-green-500 rounded-full">
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
           <path d="M16 2H8C4.691 2 2 4.691 2 8v12a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 13c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v7z"></path>
           <circle cx="9.5" cy="11.5" r="1.5"></circle>
           <circle cx="14.5" cy="11.5" r="1.5"></circle>
         </svg>
         <span class="block w-2 h-2 ring-4 ring-white bg-red-500 absolute top-1 right-1 rounded-full"></span>
       </button>
     </li>
     <!-- user account  -->
     <li>
       <button class="p-2 bg-green-500/10 focus:ring  items-center focus:ring-green-400/30 hover:bg-green-500/30 transisi text-green-500 rounded-full">
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
           <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
         </svg>
       </button>
     </li>
     <!-- button  -->
     <li id="btnMenu" class="md:hidden block">
       <button class="p-2 bg-green-500/10 focus:ring  items-center focus:ring-green-400/30 hover:bg-green-500/30 transisi text-green-500 rounded-full">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
           <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
         </svg>
       </button>
     </li>
   </ul>
 </header>