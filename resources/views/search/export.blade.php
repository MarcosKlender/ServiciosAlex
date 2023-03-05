<table>
    <thead>
        <tr>
            <th style="font-weight: bold; text-align: center;" colspan="10">REPORTE DE STOCK</th>
        </tr>
        <tr>
            <th style="font-weight: bold;">NOMBRE</th>
            <th style="font-weight: bold;">STOCK INICIAL</th>
            <th style="font-weight: bold;">LUNES</th>
            <th style="font-weight: bold;">MARTES</th>
            <th style="font-weight: bold;">MIERCOLES</th>
            <th style="font-weight: bold;">JUEVES</th>
            <th style="font-weight: bold;">VIERNES</th>
            <th style="font-weight: bold;">SABADO</th>
            <th style="font-weight: bold;">DOMINGO</th>
            <th style="font-weight: bold;">TOTAL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->existencias }}</td>
                <td>{{ $product->lunes }}</td>
                <td>{{ $product->martes }}</td>
                <td>{{ $product->miercoles }}</td>
                <td>{{ $product->jueves }}</td>
                <td>{{ $product->viernes }}</td>
                <td>{{ $product->sabado }}</td>
                <td>{{ $product->domingo }}</td>
                <td class="p-3 whitespace-nowrap font-black">
                    {{ $product->existencias - ($product->lunes + $product->martes + $product->miercoles + $product->jueves + $product->viernes + $product->sabado + $product->domingo) }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
