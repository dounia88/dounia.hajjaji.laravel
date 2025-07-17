<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <h2 class="text-3xl font-bold mb-6 border-b pb-4">Bienvenue, {{ Auth::user()->name }} !</h2>

                   
                    @if(Auth::user()->role === 'customer')
                        <div class="mb-10">
                            <h3 class="text-xl font-semibold mb-3 text-green-600 dark:text-green-300">
                                👤 Espace Client
                            </h3>
                            <p class="mb-4 text-gray-600 dark:text-gray-400">Vous pouvez parcourir les produits disponibles.</p>
                            <a href="{{ route('products.index') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-2 rounded shadow transition">
                                🛒 Parcourir les produits
                            </a>
                        </div>
                    @endif

                   
                    @if(Auth::user()->role === 'admin')
                        <div class="mb-10 border-t pt-6">
                            <h3 class="text-xl font-semibold mb-3 text-blue-600 dark:text-blue-300">
                                🛠️ Espace Administrateur
                            </h3>
                            <p class="mb-4 text-gray-600 dark:text-gray-400">
                                Vous avez accès à toutes les fonctionnalités d'administration.
                            </p>
                            <a href="{{ route('admin.users.index') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded shadow transition">
                                👥 Gérer les utilisateurs
                            </a>
                        </div>
                    @endif

                   
                    @if(Auth::user()->role === 'seller')
                        <div class="mb-10 border-t pt-6">
                            <h3 class="text-xl font-semibold mb-3 text-purple-600 dark:text-purple-300">
                                🛍️ Espace Vendeur
                            </h3>
                            <p class="mb-4 text-gray-600 dark:text-gray-400">
                                Vous avez accès à toutes les fonctionnalités de vendeur.
                            </p>
                            <a href="{{ route('products.index') }}" class="inline-block bg-purple-600 hover:bg-purple-700 text-white font-medium px-6 py-2 rounded shadow transition">
                                🏪 Accéder à la boutique
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
