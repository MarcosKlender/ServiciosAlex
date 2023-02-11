<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Stocks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('stocks.update', $stock) }}" method="POST">
                        @method('PUT')

                        @csrf

                        <label class="text-gray-700">Stock #1</label>
                        <input type="text" name="stock1_name" class="rounded border-gray-200 w-full mb-4"
                            value="{{ old('stock1_name', $stock->stock1_name) }}">

                        <label class="text-gray-700">Stock #2</label>
                        <input type="text" name="stock2_name" class="rounded border-gray-200 w-full mb-4"
                            value="{{ old('stock2_name', $stock->stock2_name) }}">

                        <label class="text-gray-700">Stock #3</label>
                        <input type="text" name="stock3_name" class="rounded border-gray-200 w-full mb-4"
                            value="{{ old('stock3_name', $stock->stock3_name) }}">

                        <label class="text-gray-700">Stock #4</label>
                        <input type="text" name="stock4_name" class="rounded border-gray-200 w-full mb-4"
                            value="{{ old('stock4_name', $stock->stock4_name) }}">

                        <label class="text-gray-700">Stock #5</label>
                        <input type="text" name="stock5_name" class="rounded border-gray-200 w-full mb-4"
                            value="{{ old('stock5_name', $stock->stock5_name) }}">

                        <label class="text-gray-700">Stock #6</label>
                        <input type="text" name="stock6_name" class="rounded border-gray-200 w-full mb-4"
                            value="{{ old('stock6_name', $stock->stock6_name) }}">


                        <div class="flex items-center justify-between">
                            <a href="{{ route('products.index') }}" class="text-red-600">Volver</a>

                            <input type="submit" value="Enviar" class="text-green-800 rounded">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
