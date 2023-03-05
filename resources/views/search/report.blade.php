<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Registro de Stock') }}

            <form action="{{ route('search.export') }}">
                <div class="text-center">
                    <button type="submit"
                        class="bg-sky-200 hover:bg-sky-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                        </svg>
                        <span>Descargar</span>
                    </button>
                </div>
            </form>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-auto">
                    <table class="w-full">
                        <thead class="uppercase text-white text-left">
                            <tr class="bg-gray-700">
                                <th class="p-3 tracking-wide">Producto</th>
                                <th class="p-3 tracking-wide">Stock</th>
                                <th class="p-3 tracking-wide">Lun</th>
                                <th class="p-3 tracking-wide">Mar</th>
                                <th class="p-3 tracking-wide">Mie</th>
                                <th class="p-3 tracking-wide">Jue</th>
                                <th class="p-3 tracking-wide">Vie</th>
                                <th class="p-3 tracking-wide">Sab</th>
                                <th class="p-3 tracking-wide">Dom</th>
                                <th class="p-3 tracking-wide">TOTAL</th>
                                <th class="p-3 tracking-wide">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($products as $product)
                                <tr class="odd:bg-white even:bg-gray-200">
                                    <td class="p-3 whitespace-nowrap">{{ $product->name }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->existencias }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->lunes }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->martes }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->miercoles }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->jueves }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->viernes }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->sabado }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $product->domingo }}</td>
                                    <td class="p-3 whitespace-nowrap font-black">
                                        {{ $product->existencias - ($product->lunes + $product->martes + $product->miercoles + $product->jueves + $product->viernes + $product->sabado + $product->domingo) }}
                                    </td>
                                    <td class="p-3 whitespace-nowrap">
                                        <form action="{{ route('search.edit', $product->id) }}" method="POST"
                                            class="text-red-700">
                                            @csrf
                                            @method('GET')
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="submit" value="Editar" class="text-sky-700">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
