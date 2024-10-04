@extends('layout')
@section('content')
  <!-- CONTENT -->
  <div class = "content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
      <nav class = "flex px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
          <ol class = "inline-flex items-center space-x-1 md:space-x-3">
              <li class = "inline-flex items-center hover:shadow-lg">
                  <a href="{{route('page')}}" class = " inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                      <svg class = "w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                      Home
                  </a>
              </li>
              {{-- <li>
                  <div class = "flex items-center">
                      <svg class = "w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path></svg>
                      <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
                  </div>
              </li> --}}
          </ol>
      </nav>
      <div class = "flex flex-wrap my-5 -mx-2 ml-60">
          <div class = "w-full lg:w-1/3 p-2">
              <button id="categorydropdown" data-dropdown-toggle="ctgdropdown" type="button" class = "hover:shadow-2xl flex items-center flex-row w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 rounded-md p-3">
                  <div class = "flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                    <svg class="ml-1  dark:text-white object-scale-down transition duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z" clip-rule="evenodd"/>
                    </svg>                    
                  </div>
                  <div class = "flex flex-col justify-around flex-grow ml-5 text-white">
                      <div class = "text-xl font-semibold whitespace-nowrap">
                          Categories
                      </div>
                  </div>
                  <div class = "flex items-center  flex-none text-white">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "w-6 h-6">
                          <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg>
                  </div>
                </button>
                <div id="ctgdropdown" class="z-10 hidden divide-y rounded-lg shadow w-3/12">
                  @foreach ($categories as $category)
                    <ul class="flex items-center flex-row w-full font-semibold bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 rounded-md p-3" aria-labelledby="categorydropdown">
                      <li>
                        <a href="#" class="flex items-center flex-row w-full hover:text-white dark:hover:text-white" data-id="{{ $category->id }}">{{$category->name}}</a>
                      </li>
                    </ul>
                  @endforeach
                </div>
          </div>
          <div class = "w-full md:w-1/2 lg:w-1/3 p-2 ">
              <button id="subcategorydropdown" data-dropdown-toggle="stgdropdown" class = "hover:shadow-2xl flex items-center flex-row w-full bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 rounded-md p-3">
                  <div class = "flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                    <svg class="ml-1  dark:text-white object-scale-down transition duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                    </svg>
                  </div>
                  <div class = "flex flex-col justify-around flex-grow ml-5 text-white">
                      <div class = "text-xl font-semibold  whitespace-nowrap">
                        Subcategories
                      </div>
                  </div>
                  <div class = " flex items-center flex-none text-white">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "w-6 h-6">
                          <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg>
                  </div>
                </button>
                <div id="stgdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 w-3/12">
                  <ul class="flex items-center flex-row w-full font-semibold bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 rounded-md p-3" aria-labelledby="subcategorydropdown">
                  </ul>
                </div>
            </div>
          </div>
  </div>
  <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
  <script>
      $(document).ready(function () {
      $('#ctgdropdown').on('click', 'a', function (e) {
        e.preventDefault();
          let id = $(this).data('id');  

          $('#stgdropdown ul').empty();
          $('#stgdropdown ul').append(`<li class="block px-4 py-2 text-gray-700 dark:text-gray-200">Processing...</li>`);

          $.ajax({
              type: 'GET',
              url: 'subcategories/' + id,  
              success: function (response) {
                  console.log('Response:', response);
                  // var response = JSON.parse(response);  
                  console.log(response);  

                  $('#stgdropdown ul').empty();
                  if (response.length > 0) {
                      response.forEach(element => {
                          $('#stgdropdown ul').append(`
                              <li>
                                  <a href="#" class="block px-4 py-2 hover:text-white dark:hover:text-white">
                                      ${element['name']}
                                  </a>
                              </li>`);
                      });
                  } else {
                      
                      $('#stgdropdown ul').append(`<li class="block px-4 py-2 text-gray-700 dark:text-gray-200">No subcategories available</li>`);
                  }
              },
          });
      });
  });

  </script>
  @endsection