<x-app-layout>



<h1>All Product</h1>
<div class="flex flex-col overflow-x-auto">
    <div class="sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
              <tr>
                <th scope="col" class="px-6 py-4">ID</th>
                <th scope="col" class="px-6 py-4">Name</th>
                <th scope="col" class="px-6 py-4">Quantity</th>
                <th scope="col" class="px-6 py-4">Price</th>
                <th scope="col" class="px-6 py-4">Description</th>
              </tr>
           

            </thead>
            <tbody>
                @foreach($products as $product)

              
              <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$product->id}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$product->name}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$product->quantity}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$product->price}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$product->description}}</td>
        
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>