<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Models\Products;
use App\Models\Search;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product = Products::find($request->id);

        return view('search.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        $request->validate([
            'existencias' => 'required|numeric',
            'lunes' => 'required|numeric',
            'martes' => 'required|numeric',
            'miercoles' => 'required|numeric',
            'jueves' => 'required|numeric',
            'viernes' => 'required|numeric',
            'sabado' => 'required|numeric',
            'domingo' => 'required|numeric',
        ]);

        $product = Products::find($request->id);

        $product->update([
            'existencias' => $request->existencias,
            'lunes' => $request->lunes,
            'martes' => $request->martes,
            'miercoles' => $request->miercoles,
            'jueves' => $request->jueves,
            'viernes' => $request->viernes,
            'sabado' => $request->sabado,
            'domingo' => $request->domingo,
        ]);

        return redirect()->route('search.report');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
    }

    public function report()
    {
        return view('search.report', [
            'products' => Products::orderBy('id', 'asc')->get()
        ]);
    }

    public function exportProducts()
    {
        return Excel::download(new ProductsExport, 'STOCK.xlsx');
    }
}
