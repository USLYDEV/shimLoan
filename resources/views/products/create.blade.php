<x-app-layout>
 
<div class="flex min-h-full flex-col justify-center px-6 py-1 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Add New Product</h2>
    </div>
  
    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-1" action="#" method="POST">
        <div>
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" autocomplete="" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        {{-- Quantity Field  --}}
        <div>
          <div class="flex items-center justify-between">
            <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
        
          </div>
          <div class="mt-2">
            <input id="quantity" name="quantity" type="text" autocomplete="" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

               {{-- Price Field  --}}
               <div>
                <div class="flex items-center justify-between">
                  <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
              
                </div>
                <div class="mt-2">
                  <input id="price" name="price" type="text" autocomplete="" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
  
                {{-- Description Field  --}}
                <div>
                    <div class="flex items-center justify-between">
                      <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                  
                    </div>
                    <div class="mt-2">
                      <input id="description" name="description" type="text" autocomplete="" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Product</button>
        </div>
      </form>
  
      <p class="mt-5 text-center text-sm text-gray-500">
        Want to update product ?
        <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">modify</a>
      </p>
    </div>
  </div>
  
  
</x-app-layout>