  @extends('layout')
  @section('content')

  <div class="container flex items-center justify-center mx-auto mt-32 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <button id="categorydropdown" data-dropdown-toggle="ctgdropdown" class="mb-11 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Categories button<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
      </button>
      
      <!--Category Dropdown menu -->
      <div id="ctgdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        @foreach ($categories as $category)
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="categorydropdown">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-id="{{ $category->id }}">{{$category->name}}</a>
            </li>
          </ul>
        @endforeach
      </div>

      <button id="subcategorydropdown" data-dropdown-toggle="stgdropdown" class="ml-11 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Subcategories button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
        </button>
        
        <!--Subcategory Dropdown menu -->
        <div id="stgdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="subcategorydropdown">
            </ul>
        </div>
      </div>

      <!--Image Upload menu -->
      <div class="container flex items-center justify-center mx-auto mt-10 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <form action="" enctype="multipart/form-data">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        <div class="img-holder"></div>
      </form>
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
                                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
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

  $('input[type="file"][name="image"]').val('');
            //Image preview
            $('input[type="file"][name="image"]').on('change', function(){
                var img_path = $(this)[0].value;
                var img_holder = $('.img-holder');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();

                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                     if(typeof(FileReader) != 'undefined'){
                          img_holder.empty();
                          var reader = new FileReader();
                          reader.onload = function(e){
                              $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'max-width:100px;margin-bottom:10px;'}).appendTo(img_holder);
                          }
                          img_holder.show();
                          reader.readAsDataURL($(this)[0].files[0]);
                     }else{
                         $(img_holder).html('This browser does not support FileReader');
                     }
                }else{
                    $(img_holder).empty();
                }
            });
  </script>
  @endsection