<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Reporte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('search.update', $product) }}" method="POST">
                        @method('PUT')
                        @include('search._form')
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
