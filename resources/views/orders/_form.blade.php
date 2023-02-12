@csrf

<div class="text-gray-900 grid lg:grid-cols-3 gap-3">
    <div>
        <label class="text-gray-700">Estado</label>
        <span class="ml-3 text-red-700">
            @error('estado')
                *{{ $message }}
            @enderror
        </span>
        <select name="estado" class="rounded border-gray-200 w-full mb-4">
            <option value="PENDIENTE" {{ $order->estado == 'PENDIENTE' ? 'selected' : '' }}>PENDIENTE</option>
            <option value="ENTREGADO" {{ $order->estado == 'ENTREGADO' ? 'selected' : '' }}>ENTREGADO</option>
        </select>
    </div>

    <div>
        <label class="text-gray-700">Cliente</label>
        <span class="ml-3 text-red-700">
            @error('cliente')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="cliente" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('cliente', $order->cliente) }}">
    </div>

    <div>
        <label class="text-gray-700">Celular</label>
        <span class="ml-3 text-red-700">
            @error('celular')
                *{{ $message }}
            @enderror
        </span>
        <input type="text" name="celular" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('celular', $order->celular) }}">
    </div>

    <div>
        <label class="text-gray-700">Fecha Entrega</label>
        <span class="ml-3 text-red-700">
            @error('fecha_entrega')
                *{{ $message }}
            @enderror
        </span>
        <input type="date" name="fecha_entrega" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('fecha_entrega', $order->fecha_entrega) }}">
    </div>

    <div>
        <label class="text-gray-700">Vendedor</label>
        <span class="ml-3 text-red-700">
            @error('vendedor')
                *{{ $message }}
            @enderror
        </span>
        <input type="text" name="vendedor" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('vendedor', $order->vendedor) }}">
    </div>

    <div>
        <label class="text-gray-700">Comprobante</label>
        <span class="ml-3 text-red-700">
            @error('comprobante')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="comprobante" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('comprobante', $order->comprobante) }}">
    </div>

    <div>
        <label class="text-gray-700">Macho Alfa</label>
        <span class="ml-3 text-red-700">
            @error('macho')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="macho" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('macho', $order->macho) }}">
    </div>

    <div>
        <label class="text-gray-700">Potentisimo</label>
        <span class="ml-3 text-red-700">
            @error('potentisimo')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="potentisimo" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('potentisimo', $order->potentisimo) }}">
    </div>

    <div>
        <label class="text-gray-700">Spray Retardante</label>
        <span class="ml-3 text-red-700">
            @error('spray')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="spray" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('spray', $order->spray) }}">
    </div>

    <div>
        <label class="text-gray-700">XOXO</label>
        <span class="ml-3 text-red-700">
            @error('xoxo')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="xoxo" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('xoxo', $order->xoxo) }}">
    </div>

    <div>
        <label class="text-gray-700">Lovin Fem</label>
        <span class="ml-3 text-red-700">
            @error('lovin')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="lovin" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('lovin', $order->lovin) }}">
    </div>

    <div>
        <label class="text-gray-700">Anillos</label>
        <span class="ml-3 text-red-700">
            @error('anillos')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="anillos" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('anillos', $order->anillos) }}">
    </div>

    <div>
        <label class="text-gray-700">Pulseras</label>
        <span class="ml-3 text-red-700">
            @error('pulseras')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="pulseras" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('pulseras', $order->pulseras) }}">
    </div>

    <div>
        <label class="text-gray-700">Macho Alfa 50</label>
        <span class="ml-3 text-red-700">
            @error('macho50')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="macho50" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('macho50', $order->macho50) }}">
    </div>

    <div>
        <label class="text-gray-700">Baraja Roja</label>
        <span class="ml-3 text-red-700">
            @error('broja')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="broja" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('broja', $order->broja) }}">
    </div>

    <div>
        <label class="text-gray-700">Baraja Azul</label>
        <span class="ml-3 text-red-700">
            @error('bazul')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="bazul" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('bazul', $order->bazul) }}">
    </div>

    <div>
        <label class="text-gray-700">Baraja Negra</label>
        <span class="ml-3 text-red-700">
            @error('bnegra')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="bnegra" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('bnegra', $order->bnegra) }}">
    </div>

    <div>
        <label class="text-gray-700">Quita Vicio</label>
        <span class="ml-3 text-red-700">
            @error('quitavicio')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="quitavicio" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('quitavicio', $order->quitavicio) }}">
    </div>

    <div>
        <label class="text-gray-700">Litoku</label>
        <span class="ml-3 text-red-700">
            @error('litoku')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="litoku" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('litoku', $order->litoku) }}">
    </div>

    <div>
        <label class="text-gray-700">Hepadol</label>
        <span class="ml-3 text-red-700">
            @error('hepadol')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="hepadol" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('hepadol', $order->hepadol) }}">
    </div>

    <div>
        <label class="text-gray-700">XOXO Retardante</label>
        <span class="ml-3 text-red-700">
            @error('xoxoretardante')
                *{{ $message }}
            @enderror
        </span>
        <input type="number" name="xoxoretardante" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('xoxoretardante', $order->xoxoretardante) }}">
    </div>

    <div>
        <label class="text-gray-700">Carrera</label>
        <span class="ml-3 text-red-700">
            @error('carrera')
                *{{ $message }}
            @enderror
        </span>
        <input type="text" step="0.01" name="carrera" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('carrera', $order->carrera) }}">
    </div>

    <div>
        <label class="text-gray-700">Total</label>
        <span class="ml-3 text-red-700">
            @error('total')
                *{{ $message }}
            @enderror
        </span>
        <input type="text" name="total" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('total', $order->total) }}">
    </div>

    <div>
        <label class="text-gray-700">Sector</label>
        <span class="ml-3 text-red-700">
            @error('stock')
                *{{ $message }}
            @enderror
        </span>
        <input type="text" name="stock" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('stock', $order->stock) }}">
    </div>

    <div>
        <label class="text-gray-700">Novedades</label>
        <span class="ml-3 text-red-700">
            @error('novedades')
                *{{ $message }}
            @enderror
        </span>
        <input type="text" name="novedades" class="rounded border-gray-200 w-full mb-4"
            value="{{ old('novedades', $order->novedades) }}">
    </div>
</div>

<div class="mt-4 mb-4 flex items-center justify-between">
    <a href="{{ route('orders.index') }}" class="text-red-600">Volver</a>

    <input type="submit" value="Enviar" class="text-green-800 rounded">
</div>
