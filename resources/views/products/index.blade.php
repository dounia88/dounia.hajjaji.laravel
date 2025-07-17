<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-700 dark:text-purple-300 leading-tight">
            {{ __('Produits') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-purple-50 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @if (session('success'))
                        <div class="bg-blue-100 border border-blue-400 text-blue-800 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-800 px-4 py-3 rounded mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($products as $product)
                            <div class="bg-purple-100 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                                
                                @if ($product->image)
                                    <img src="" alt="" class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-purple-200 dark:bg-gray-600 flex items-center justify-center">
                                        <span class="text-purple-600 dark:text-gray-300">Pas d'image</span>
                                    </div>
                                @endif
                                
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold mb-2 text-purple-800 dark:text-purple-200">test name</h3>
                                    <p class="text-purple-700 dark:text-purple-300 mb-2 line-clamp-2">test</p>
                                    
                                    <div class="flex justify-between items-center mb-4">
                                        <span class="text-lg font-bold text-indigo-700 dark:text-indigo-300">480 €</span>
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
