<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Órdenes') }}

            <a href="{{ route('orders.create') }}" class="text-green-700">Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="overflow-auto">
                    <table class="w-full">
                        <thead class="uppercase text-white text-left">
                            <tr class="bg-gray-700">
                                <th class="p-3 tracking-wide">Estado</th>
                                <th class="p-3 tracking-wide">Cliente</th>
                                <th class="p-3 tracking-wide">Celular</th>
                                <th class="p-3 tracking-wide">Fecha Entrega</th>
                                <th class="p-3 tracking-wide">Vendedor</th>
                                <th class="p-3 tracking-wide">Total</th>
                                <th class="p-3 tracking-wide">Sector</th>
                                <th class="p-3 tracking-wide">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($orders as $order)
                                <tr class="odd:bg-white even:bg-gray-200">
                                    <td class="p-3 whitespace-nowrap">{{ $order->estado }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $order->cliente }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $order->celular }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $order->fecha_entrega }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $order->vendedor }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $order->total }}</td>
                                    <td class="p-3 whitespace-nowrap">{{ $order->stock }}</td>
                                    <td class="p-3 whitespace-nowrap">
                                        <a href="{{ route('orders.show', $order) }}"
                                            class="text-green-700">Ver Detalles</a>
                                            <br>
                                        <a href="{{ route('orders.edit', $order) }}"
                                            class="text-sky-700">Editar</a>
                                    </td>
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
