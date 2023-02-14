<table>
    <thead>
        <tr>
            <th>ESTADO</th>
            <th>CLIENTE</th>
            <th>CELULAR</th>
            <th>FECHAD DE ENTREGA</th>
            <th>VENDEDOR</th>
            <th>PULSERA</th>
            <th>CARTA ROJA</th>
            <th>CARTA AZUL</th>
            <th>CARTA NEGRA</th>
            <th>SPRAY</th>
            <th>POTENTISIMO</th>
            <th>MACHO ALFA</th>
            <th>ANILLO</th>
            <th>QUITA VICIOS</th>
            <th>LOVIFEM</th>
            <th>XOXO</th>
            <th>SPRAY XOXO</th>
            <th>LITOKU</th>
            <th>MACHO ALFA 50</th>
            <th>HEPADOL</th>
            <th>COMPROBANTE</th>
            <th>CARRERA</th>
            <th>VALOR A DEPOSITAR</th>
            <th>SECTOR</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->estado }}</td>
                <td>{{ $order->cliente }}</td>
                <td>{{ $order->celular }}</td>
                <td>{{ $order->fecha_entrega }}</td>
                <td>{{ $order->vendedor }}</td>
                <td>{{ $order->pulseras }}</td>
                <td>{{ $order->broja }}</td>
                <td>{{ $order->bazul }}</td>
                <td>{{ $order->bnegra }}</td>
                <td>{{ $order->spray }}</td>
                <td>{{ $order->potentisimo }}</td>
                <td>{{ $order->macho }}</td>
                <td>{{ $order->anillos }}</td>
                <td>{{ $order->quitavicio }}</td>
                <td>{{ $order->lovin }}</td>
                <td>{{ $order->xoxo }}</td>
                <td>{{ $order->xoxoretardante }}</td>
                <td>{{ $order->litoku }}</td>
                <td>{{ $order->macho50 }}</td>
                <td>{{ $order->hepadol }}</td>
                <td>{{ $order->comprobante }}</td>
                <td>{{ $order->carrera }}</td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->stock }}</td>
            </tr>
        @endforeach
    </tbody>
</table>