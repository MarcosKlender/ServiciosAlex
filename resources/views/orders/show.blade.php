<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Detalles de la  Orden') }}

            <a href="{{ route('orders.edit', $order) }}" class="text-sky-700">Editar</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid lg:grid-cols-3 gap-3">
                    <div>
                        <label class="text-gray-700">Estado</label>
                        <input type="text" name="estado" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->estado }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Cliente</label>
                        <input type="text" name="cliente" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->cliente }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Celular</label>
                        <input type="text" name="celular" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->celular }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Macho Alfa</label>
                        <input type="text" name="macho" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->macho }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Potentisimo</label>
                        <input type="text" name="potentisimo" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->potentisimo }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Spray Retardante</label>
                        <input type="text" name="spray" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->spray }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">XOXO</label>
                        <input type="text" name="xoxo" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->xoxo }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Lovin Fem</label>
                        <input type="text" name="lovin" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->lovin }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Anillos</label>
                        <input type="text" name="anillos" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->anillos }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Pulseras</label>
                        <input type="text" name="pulseras" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->pulseras }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Macho Alfa 50</label>
                        <input type="text" name="macho50" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->macho50 }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Baraja Roja</label>
                        <input type="text" name="broja" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->broja }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Baraja Azul</label>
                        <input type="text" name="bazul" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->bazul }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Baraja Negra</label>
                        <input type="text" name="bnegra" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->bnegra }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Quita Vicio</label>
                        <input type="text" name="quitavicio" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->quitavicio }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Litoku</label>
                        <input type="text" name="litoku" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->litoku }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Hepadol</label>
                        <input type="text" name="hepadol" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->hepadol }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">XOXO Retardante</label>
                        <input type="text" name="xoxoretardante" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->xoxoretardante }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Vendedor</label>
                        <input type="text" name="vendedor" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->vendedor }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Comprobante</label>
                        <input type="text" name="comprobante" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->comprobante }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Carrera</label>
                        <input type="text" name="carrera" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->carrera }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Total</label>
                        <input type="text" name="total" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->total }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Sector</label>
                        <input type="text" name="stock" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->stock }}" readonly>
                    </div>

                    <div>
                        <label class="text-gray-700">Novedades</label>
                        <input type="text" name="novedades" class="rounded border-gray-200 w-full mb-4"
                            value="{{ $order->novedades }}" readonly>
                    </div>

                </div>

                <div class="text-center mb-8">
                    <a href="{{ route('orders.index') }}" class="text-red-600">Volver</a>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
