<x-app-layout>
    <div class="max-w-4xl mt-2 mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="flex flex-col items-center md:flex-row">
            <!-- Product Image -->
            <div class="md:w-1/3 p-4 relative">
                <div class=" ">
                    <img src="https://rukminim2.flixcart.com/image/312/312/xif0q/computer/k/8/k/15-fa1226tx-gaming-laptop-hp-original-imah4bjbx8ctzdg6.jpeg"
                        alt="HP Victus Laptop" class="w-full h-auto object-cover rounded-lg" />
                </div>
            </div>

            <!-- Product Details -->
            <div class="md:w-2/3 p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">{{$product->title}}</h1>
                <p class="text-sm text-gray-600 mb-4">{{$product->desc}}</p>

                <div class="flex items-center justify-between mb-4">
                    <div>
                        <span class="text-3xl font-bold text-gray-900">${{$product->price * 0.9}}</span>
                        <span class="ml-2 text-sm font-medium text-gray-500 line-through">${{$product->price}}</span>
                    </div>
                    <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">Save 10%</span>
                </div>

                <p class="text-green-600 text-sm font-semibold mb-4">Free Delivery</p>

                <div class="flex space-x-4">
                    <a href="{{ route('products.edit', ['product'=>$product->id]) }}"
                        class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                        Edit
                    </a>

                    <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post"
                        class="mx-2" onsubmit="return confirm('Productni o\'chirishga ishonchingiz komilmi?')">
                        @method('delete')
                        @csrf<button type="submit" class="btn btn-dark">O'chirish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
