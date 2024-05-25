<x-welcome-layout>

    <div class="sticky top-20 bg-white">
        <ul class="flex gap-8 ">
            <li><a href="">Men's Clothing</a></li>
            <li><a href="">Women's Clothing</a></li>
            <li><a href="">Jewelry</a></li>
            <li><a href="">Electronics</a></li>
        </ul>
    </div>

    <div class="grid grid-cols-2 gap-6 grid-rows-2 ">
        @foreach ($products as $product)
            <div
                class="p-6 max-w-xl  w mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4 space-y-4 my-4">
                <div class="shrink-0">
                    <img class="h-20 w-20" src="{{ $product['image'] }}" alt="image">
                </div>
                <div class="flex flex-col space-y-2">
                    <div class="text-2xl font-medium text-black">{{ $product['title'] }}</div>
                    <p class="text-slate-500 text-sm line-clamp-1">{{ $product['description'] }}</p>
                    <p class="text-black text-sm line-clamp-1">${{ $product['price'] }}</p>

                    <div class="flex items-center justify-between text-sm my-2">
                        <div class="text-slate-400">Available Unit:{{ $product['rating']['count'] }}</div>
                        <div>
                            <button
                                class=" border border-solid font-medium border-lime-600 p-1 hover:bg-lime-600 hover:text-white">Buy
                                now</button>
                            <button
                                class=" border border-solid font-medium border-lime-600 p-1 hover:bg-lime-600 hover:text-white">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="w-full col-span-2 mx-auto my-5 ">
            {{ $products->withPath(url()->current())->links() }}
        </div>
    </div>

</x-welcome-layout>
