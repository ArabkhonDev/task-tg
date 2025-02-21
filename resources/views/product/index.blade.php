<x-app-layout>
    @if (Auth::user()->role == 'admin')
    <a href="{{ route('products.create') }}" class="btn btn-primary">
        <button
            class="middle none center mr-4 rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true">
            Add
        </button>
    </a>
    @endif
    <div class=" w-7xl collections flex flex-wrap justify-center">
        @foreach ($products as $product)
            <div class="w-100 m-2 p-2 border hover:shadow-2xs hover:bg-sky-700">
                <img class="md:w-1/2  object-cover rounded-lg rounded-r-none pb-5/6" src="{{asset('storage/'.$product->image)}}"
                    alt="bag" width="50px" height="50px">
                <div class="w-full px-4 py-4 bg-white rounded-lg">
                    <div class="flex items-center">
                        <h2 class="text-xl text-gray-800 font-medium mr-auto">{{ $product->title }}</h2>
                        <p class="text-gray-800 font-semibold tracking-tighter">
                            only
                            <i class="text-gray-600 line-through">{{ $product->price }}$</i>
                            {{ $product->price * 0.81 }}
                        </p>
                    </div>
                    <p class="text-sm text-gray-700 mt-4">
                        {{ $product->desc }}
                    </p>

                    <div class="flex items-center justify-end mt-4 top-auto">
                        <button
                            class=" bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-1 mr-1 rounded focus:outline-none focus:shadow-outline transition duration-300">
                            Buy Now
                        </button>
                        <a href="{{ route('products.show', ['product' => $product->id]) }}"
                            class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $products->links() }}
</x-app-layout>
