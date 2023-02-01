<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">

            <div class="md:flex">
                <!-- Módulo Productos -->
                <a href="{{ route('products.index') }}" class='basis-4/12 flex items-center justify-center py-3'>
                    <div class="rounded-xl border p-5 shadow-md w-11/12 bg-blue-100">
                        <div class="my-6">
                            <div class="text-center text-xl font-bold">Productos</div>
                        </div>
                    </div>
                </a>

                <!-- Módulo Órdenes -->
                <a href="{{ route('orders.index') }}" class='basis-4/12 flex items-center justify-center py-3'>
                    <div class="rounded-xl border p-5 shadow-md w-11/12 bg-teal-100">
                        <div class="my-6">
                            <div class="text-center text-xl font-bold">Órdenes</div>
                        </div>
                    </div>
                </a>

                <!-- Módulo Búsqueda -->
                <a href="{{ route('search.index') }}" class='basis-4/12 flex items-center justify-center py-3'>
                    <div class="rounded-xl border p-5 shadow-md w-11/12 bg-purple-100">
                        <div class="my-6">
                            <div class="text-center text-xl font-bold">Búsqueda</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
