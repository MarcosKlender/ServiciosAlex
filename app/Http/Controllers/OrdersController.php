<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use Illuminate\Support\Str;
use App\Models\Orders;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrdersController extends Controller
{
    public function index()
    {
        return view('orders.index', [
            'orders' => Orders::orderBy('id', 'desc')->get()
        ]);
    }

    public function create(Orders $order)
    {
        return view('orders.create', ['order' => $order]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'required',
            'cliente' => 'required|numeric',
            'celular' => 'required',
            'fecha_entrega' => 'required',
            'vendedor' => 'required',
            'carrera' => 'required|numeric',
            'total' => 'required|numeric',
            'stock' => 'required',
        ]);

        $order = Orders::create([
            'estado' => $request->estado,
            'cliente' => $request->cliente,
            'celular' => $request->celular,
            'fecha_entrega' => $request->fecha_entrega,
            'vendedor' => Str::upper($request->vendedor),
            'macho' => $request->macho,
            'potentisimo' => $request->potentisimo,
            'spray' => $request->spray,
            'xoxo' => $request->xoxo,
            'lovin' => $request->lovin,
            'anillos' => $request->anillos,
            'pulseras' => $request->pulseras,
            'macho50' => $request->macho50,
            'broja' => $request->broja,
            'bazul' => $request->bazul,
            'bnegra' => $request->bnegra,
            'quitavicio' => $request->quitavicio,
            'litoku' => $request->litoku,
            'hepadol' => $request->hepadol,
            'xoxoretardante' => $request->xoxoretardante,
            'comprobante' => $request->comprobante,
            'carrera' => $request->carrera,
            'total' => $request->total,
            'stock' => Str::upper($request->stock),
            'novedades' => Str::upper($request->novedades),
        ]);

        $order->save();

        return redirect()->route('orders.index');
    }

    public function show(Orders $order)
    {
        return view('orders.show', ['order' => $order]);
    }

    public function edit(Orders $order)
    {
        return view('orders.edit', ['order' => $order]);
    }

    public function update(Request $request, Orders $order)
    {
        $request->validate([
            'estado' => 'required',
            'cliente' => 'required|numeric',
            'celular' => 'required',
            'fecha_entrega' => 'required',
            'vendedor' => 'required',
            'carrera' => 'required|numeric',
            'total' => 'required|numeric',
            'stock' => 'required',
        ]);

        $order->update([
            'estado' => $request->estado,
            'cliente' => $request->cliente,
            'celular' => $request->celular,
            'fecha_entrega' => $request->fecha_entrega,
            'vendedor' => Str::upper($request->vendedor),
            'macho' => $request->macho,
            'potentisimo' => $request->potentisimo,
            'spray' => $request->spray,
            'xoxo' => $request->xoxo,
            'lovin' => $request->lovin,
            'anillos' => $request->anillos,
            'pulseras' => $request->pulseras,
            'macho50' => $request->macho50,
            'broja' => $request->broja,
            'bazul' => $request->bazul,
            'bnegra' => $request->bnegra,
            'quitavicio' => $request->quitavicio,
            'litoku' => $request->litoku,
            'hepadol' => $request->hepadol,
            'xoxoretardante' => $request->xoxoretardante,
            'comprobante' => $request->comprobante,
            'carrera' => $request->carrera,
            'total' => $request->total,
            'stock' => Str::upper($request->stock),
            'novedades' => Str::upper($request->novedades),
        ]);

        return redirect()->route('orders.index');
    }

    public function destroy(Orders $orders)
    {
        //
    }

    public function exportOrders()
    {
        return Excel::download(new OrdersExport, 'Excel.xlsx');
    }
}
