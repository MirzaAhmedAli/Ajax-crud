<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>Ajax</title>
</head>
<body class = "body bg-white dark:bg-[#0F172A]">
  
  <div class = "fixed w-full z-30 flex bg-white dark:bg-[#0F172A] p-2 items-center justify-center h-16 px-10">
      <div class = "logo ml-12 dark:text-white font-bold transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
          Products
      </div>
      <!-- SPACER -->
      <div class = "grow h-full flex items-center justify-center"></div>
      <div class = "flex-none h-full text-center flex items-center justify-center">
          
              <div class = "flex space-x-3 items-center px-3">
                  <div class = "flex-none flex justify-center">
                  <div class="w-8 h-8 flex ">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9UdkG68P9AHESMfKJ-2Ybi9pfnqX1tqx3wQ&s" alt="profile" class="shadow rounded-full object-cover" />
                  </div>
                  </div>

                  <div class = "hidden md:block text-sm md:text-md font-sans font-bold text-black dark:text-white">Mirza Ahmed Ali</div>
              </div>
 
      </div>
  </div>
  <aside class = "w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-[#1E293B] ">
      <!-- open sidebar button -->
      <div class = "max-toolbar translate-x-24 scale-x-0 w-full -right-6 transition transform ease-in duration-300 flex items-center justify-between border-4 border-white dark:border-[#0F172A] bg-[#1E293B]  absolute top-2 rounded-full h-12">
          
          <div class="flex pl-4 items-center space-x-2 ">
              <div>
              <div onclick="setDark('dark')" class="moon text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
                      <path strokeLinecap="round" strokeLinejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                  </svg>
              </div>
              <div onclick="setDark('light')" class = "sun hidden text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>                      
              </div>
          </div >
              <div class = "text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
                      <path strokeLinecap="round" strokeLinejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                  </svg>
              </div>
          </div>
          <div  class = "flex items-center space-x-3 group bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-purple-500  pl-8 pr-2 py-1 rounded-full text-white font-bold ">
              <div class= "transform ease-in-out duration-300 mr-12">
                  Products
              </div>
          </div>
      </div>
      <div onclick="openNav()" class = "-right-6 transition transform ease-in-out duration-500 flex border-4 border-white dark:border-[#0F172A] bg-[#1E293B] dark:hover:bg-blue-500 hover:bg-purple-500 absolute top-2 p-3 rounded-full text-white hover:rotate-45">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
              <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
          </svg>
      </div>
      <!-- MAX SIDEBAR-->
      <div class= "max hidden text-white mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
          <div class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg class="dark:text-white object-scale-down transition duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
            </svg>
              <div>
                <a href="{{route('page')}}">
                  Home
                </a>
              </div>
          </div>
          <div class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg class=" dark:text-white object-scale-down transition duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
            </svg>                                  
              <div>
                <a href="{{route('category')}}">
                  Categories
                </a>  
              </div>
          </div>
          <div class =  "hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg class=" dark:text-white object-scale-down transition duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
            </svg>                
              <div>
                <a href="{{route('subcategory')}}">
                  Subcategories
                </a>  
              </div>
          </div>
      </div>
      <!-- MINI SIDEBAR-->
      <div class= "mini mt-20 flex ml-2 flex-col space-y-2 w-full h-[calc(100vh)]">
          <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex" data-tooltip-target="tooltip-right-home" data-tooltip-placement="right">
            <a href="{{route('page')}}">
            <svg class="dark:text-white object-scale-down transition duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
            </svg>
            </a>
              <div id="tooltip-right-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700 transition duration-300">
                Home
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>                  
          </div>
          <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex" data-tooltip-target="tooltip-right-category" data-tooltip-placement="right">
            <a href="{{route('category')}}">
            <svg class="ml-2 dark:text-white object-scale-down transition duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
            </svg>
            </a>
            <div id="tooltip-right-category" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700 transition duration-300">
              Categories
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>                 
          </div>
          <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex" data-tooltip-target="tooltip-right-subcategory" data-tooltip-placement="right">
            <a href="{{route('subcategory')}}">
            <svg class="ml-2 dark:text-white object-scale-down transition duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
            </svg>
          </a>
            <div id="tooltip-right-subcategory" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700 transition duration-300">
              SubCategories
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>           
          </div>
      </div>
      
  </aside>

  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
  <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
  <script>
      const sidebar = document.querySelector("aside");
      const maxSidebar = document.querySelector(".max")
      const miniSidebar = document.querySelector(".mini")
      const roundout = document.querySelector(".roundout")
      const maxToolbar = document.querySelector(".max-toolbar")
      const logo = document.querySelector('.logo')
      const content = document.querySelector('.content')
      const moon = document.querySelector(".moon")
      const sun = document.querySelector(".sun")

      function setDark(val){
          if(val === "dark"){
              document.documentElement.classList.add('dark')
              moon.classList.add("hidden")
              sun.classList.remove("hidden")
          }else{
              document.documentElement.classList.remove('dark')
              sun.classList.add("hidden")
              moon.classList.remove("hidden")
          }
      }

      function openNav() {
          if(sidebar.classList.contains('-translate-x-48')){
              // max sidebar 
              sidebar.classList.remove("-translate-x-48")
              sidebar.classList.add("translate-x-none")
              maxSidebar.classList.remove("hidden")
              maxSidebar.classList.add("flex")
              miniSidebar.classList.remove("flex")
              miniSidebar.classList.add("hidden")
              maxToolbar.classList.add("translate-x-0")
              maxToolbar.classList.remove("translate-x-24","scale-x-0")
              logo.classList.remove("ml-12")
              content.classList.remove("ml-12")
              content.classList.add("ml-12","md:ml-60")
          }else{
              // mini sidebar
              sidebar.classList.add("-translate-x-48")
              sidebar.classList.remove("translate-x-none")
              maxSidebar.classList.add("hidden")
              maxSidebar.classList.remove("flex")
              miniSidebar.classList.add("flex")
              miniSidebar.classList.remove("hidden")
              maxToolbar.classList.add("translate-x-24","scale-x-0")
              maxToolbar.classList.remove("translate-x-0")
              logo.classList.add('ml-12')
              content.classList.remove("ml-12","md:ml-60")
              content.classList.add("ml-12")

          }

      }
    </script>
  @yield('content')
</body>
</html>