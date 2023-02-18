<table>
    <thead>
        <tr>
            <th style="font-weight: bold;">ESTADO</th>
            <th style="font-weight: bold;">CLIENTE</th>
            <th style="font-weight: bold;">CELULAR</th>
            <th style="font-weight: bold;">FECHAD DE ENTREGA</th>
            <th style="font-weight: bold;">VENDEDOR</th>
            <th style="font-weight: bold;">PULSERA</th>
            <th style="font-weight: bold;">CARTA ROJA</th>
            <th style="font-weight: bold;">CARTA AZUL</th>
            <th style="font-weight: bold;">CARTA NEGRA</th>
            <th style="font-weight: bold;">SPRAY</th>
            <th style="font-weight: bold;">POTENTISIMO</th>
            <th style="font-weight: bold;">MACHO ALFA</th>
            <th style="font-weight: bold;">ANILLO</th>
            <th style="font-weight: bold;">QUITA VICIOS</th>
            <th style="font-weight: bold;">LOVIFEM</th>
            <th style="font-weight: bold;">XOXO</th>
            <th style="font-weight: bold;">SPRAY XOXO</th>
            <th style="font-weight: bold;">LITOKU</th>
            <th style="font-weight: bold;">MACHO ALFA 50</th>
            <th style="font-weight: bold;">HEPADOL</th>
            <th style="font-weight: bold;">COMPROBANTE</th>
            <th style="font-weight: bold;">CARRERA</th>
            <th style="font-weight: bold;">VALOR A DEPOSITAR</th>
            <th style="font-weight: bold;">SECTOR</th>
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
                <td>$ {{ $order->carrera }}</td>
                <td>$ {{ $order->total }}</td>
                <td>{{ $order->stock }}</td>
            </tr>
        @endforeach
        <tr>
            <td style="color: red;">TOTAL DE ENTREGAS</td>
            <td style="color: red;">{{ $orders->count('cliente') }}</td>
            <td></td>
            <td></td>
            <td style="color: red;">TOTAL</td>
            <td style="color: red;">{{ $orders->sum('pulseras') }}</td>
            <td style="color: red;">{{ $orders->sum('broja') }}</td>
            <td style="color: red;">{{ $orders->sum('bazul') }}</td>
            <td style="color: red;">{{ $orders->sum('bnegra') }}</td>
            <td style="color: red;">{{ $orders->sum('spray') }}</td>
            <td style="color: red;">{{ $orders->sum('potentisimo') }}</td>
            <td style="color: red;">{{ $orders->sum('macho') }}</td>
            <td style="color: red;">{{ $orders->sum('anillos') }}</td>
            <td style="color: red;">{{ $orders->sum('quitavicio') }}</td>
            <td style="color: red;">{{ $orders->sum('lovin') }}</td>
            <td style="color: red;">{{ $orders->sum('xoxo') }}</td>
            <td style="color: red;">{{ $orders->sum('xoxoretardante') }}</td>
            <td style="color: red;">{{ $orders->sum('litoku') }}</td>
            <td style="color: red;">{{ $orders->sum('macho50') }}</td>
            <td style="color: red;">{{ $orders->sum('hepadol') }}</td>
            <td></td>
            <td></td>
            <td style="color: red;">$ {{ $orders->sum('total') }}</td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td colspan="3" style="font-weight: bold;">NOVEDADES</td>
        </tr>
        @foreach ($orders as $order)
            @empty($order->novedades)
            @else
                <tr>
                    <td colspan="3">CL {{ $order->cliente }} - {{ $order->novedades }}</td>
                </tr>
            @endempty
        @endforeach
    </tbody>
</table>
