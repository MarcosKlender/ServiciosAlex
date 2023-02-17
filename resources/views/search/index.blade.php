<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exportar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form action="{{ route('orders.export') }}">
                            <label class="text-gray-700">Elija el día que desee exportar:</label>
                            <input type="date" name="day" class="rounded border-gray-200 w-full mb-4" required>
                            <div class="text-center">
                                <button type="submit"
                                    class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                                    </svg>
                                    <span>Descargar Excel</span>
                                </button>
                            </div>
                        </form>
                    </div>

                    {{-- {{ Carbon\Carbon::today()->format('d-m-Y') }} --}}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
