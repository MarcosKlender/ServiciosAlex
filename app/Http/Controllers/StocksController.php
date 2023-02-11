<?php

namespace App\Http\Controllers;

use App\Models\Stocks;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function show(Stocks $stocks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function edit(Stocks $stock)
    {
        return view('stocks.edit', ['stock' => $stock]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stocks $stock)
    {
        $request->validate([
            'stock1_name' => 'required',
            'stock2_name' => 'required',
            'stock3_name' => 'required',
            'stock4_name' => 'required',
            'stock5_name' => 'required',
            'stock6_name' => 'required',
        ], [
            'stock1_name.required' => 'Este campo es obligatiorio.',
            'stock2_name.required' => 'Este campo es obligatiorio.',
            'stock3_name.required' => 'Este campo es obligatiorio.',
            'stock4_name.required' => 'Este campo es obligatiorio.',
            'stock5_name.required' => 'Este campo es obligatiorio.',
            'stock6_name.required' => 'Este campo es obligatiorio.',
        ]);

        $stock->update([
            'stock1_name' => $request->stock1_name,
            'stock2_name' => $request->stock2_name,
            'stock3_name' => $request->stock3_name,
            'stock4_name' => $request->stock4_name,
            'stock5_name' => $request->stock5_name,
            'stock6_name' => $request->stock6_name,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stocks $stocks)
    {
        //
    }
}
