<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Registro de Stock') }}

            <a href="{{ route('products.create') }}" class="text-green-700">Descargar</a>
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
                                <th class="p-3 tracking-wide">Stock Inicial</th>
                                <th class="p-3 tracking-wide">Lunes</th>
                                <th class="p-3 tracking-wide">Martes</th>
                                <th class="p-3 tracking-wide">Miércoles</th>
                                <th class="p-3 tracking-wide">Jueves</th>
                                <th class="p-3 tracking-wide">Viernes</th>
                                <th class="p-3 tracking-wide">Sábado</th>
                                <th class="p-3 tracking-wide">Domingo</th>
                                <th class="p-3 tracking-wide">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            {{-- @foreach ($products as $product) --}}
                            <tr class="odd:bg-white even:bg-gray-200">
                                <td class="p-3 whitespace-nowrap">Megalomania</td>
                                <td class="p-3 whitespace-nowrap">0</td>
                                <td class="p-3 whitespace-nowrap">0</td>
                                <td class="p-3 whitespace-nowrap">0</td>
                                <td class="p-3 whitespace-nowrap">0</td>
                                <td class="p-3 whitespace-nowrap">0</td>
                                <td class="p-3 whitespace-nowrap">0</td>
                                <td class="p-3 whitespace-nowrap">0</td>
                                <td class="p-3 whitespace-nowrap">0</td>
                                <td class="p-3 whitespace-nowrap">0</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
