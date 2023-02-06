<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Productos') }}

            <a href="{{ route('products.create') }}" class="text-green-700">Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-auto">
                    <table class="w-full">
                        <thead class="uppercase text-white text-left">
                            <tr class="bg-gray-700">
                                <th class="p-3 tracking-wide">Nombre</th>
                                <th class="p-3 tracking-wide">Precio</th>
                                <th class="p-3 tracking-wide">{{ $stocks->stock1_name }}</th>
                                <th class="p-3 tracking-wide">{{ $stocks->stock2_name }}</th>
                                <th class="p-3 tracking-wide">{{ $stocks->stock3_name }}</th>
                                <th class="p-3 tracking-wide">{{ $stocks->stock4_name }}</th>
                                <th class="p-3 tracking-wide">{{ $stocks->stock5_name }}</th>
                                <th class="p-3 tracking-wide">{{ $stocks->stock6_name }}</th>
                                <th class="p-3 tracking-wide">TOTAL</th>
                                <th class="p-3 tracking-wide">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($products as $product)
                                <tr class="odd:bg-white even:bg-gray-200">
                                    <td class="p-3 whitespace-nowrap">{{ $product->name }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->price }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->stock1 }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->stock2 }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->stock3 }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->stock4 }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->stock5 }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->stock6 }}</td>
                                    <td class="p-3 whitespace-nowrap font-black">
                                        {{ $product->stock1 + $product->stock2 + $product->stock3 + $product->stock4 + $product->stock5 + $product->stock6 }}
                                    </td>
                                    <td class="p-3 whitespace-nowrap">
                                        <a href="{{ route('products.edit', $product) }}"
                                            class="text-sky-700">Editar</a>
                                        <form action="{{ route('products.destroy', $product) }}" method="POST"
                                            class="text-red-700">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar" class="text-red-700"
                                                onclick="return confirm('¿Está seguro de eliminar este producto?')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="odd:bg-white even:bg-gray-200">
                                <td class="p-3 whitespace-nowrap font-black">TOTAL EN STOCK</td>
                                <td class="p-3 whitespace-nowrap"></td>
                                <td class="p-3 whitespace-nowrap font-black">{{ $product->sum('stock1') }}</td>
                                <td class="p-3 whitespace-nowrap font-black">{{ $product->sum('stock2') }}</td>
                                <td class="p-3 whitespace-nowrap font-black">{{ $product->sum('stock3') }}</td>
                                <td class="p-3 whitespace-nowrap font-black">{{ $product->sum('stock4') }}</td>
                                <td class="p-3 whitespace-nowrap font-black">{{ $product->sum('stock5') }}</td>
                                <td class="p-3 whitespace-nowrap font-black">{{ $product->sum('stock6') }}</td>
                                <td class="p-3 whitespace-nowrap font-black"></td>
                                <td class="p-3 whitespace-nowrap font-black"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
