<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Stocks;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'products' => Products::orderBy('id', 'desc')->get(),
            'stocks' => Stocks::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Products $product)
    {
        return view('products.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock1' => 'required|numeric',
            'stock2' => 'required|numeric',
            'stock3' => 'required|numeric',
            'stock4' => 'required|numeric',
            'stock5' => 'required|numeric',
            'stock6' => 'required|numeric',
        ], [
            'name.required' => 'Este campo es obligatiorio.',
            'price.required' => 'Este campo es obligatiorio.',
            'stock1.required' => 'Este campo es obligatiorio.',
            'stock2.required' => 'Este campo es obligatiorio.',
            'stock3.required' => 'Este campo es obligatiorio.',
            'stock4.required' => 'Este campo es obligatiorio.',
            'stock5.required' => 'Este campo es obligatiorio.',
            'stock6.required' => 'Este campo es obligatiorio.',
        ]);

        $product = Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock1' => $request->stock1,
            'stock2' => $request->stock2,
            'stock3' => $request->stock3,
            'stock4' => $request->stock4,
            'stock5' => $request->stock5,
            'stock6' => $request->stock6,
        ]);

        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock1' => 'required|numeric',
            'stock2' => 'required|numeric',
            'stock3' => 'required|numeric',
            'stock4' => 'required|numeric',
            'stock5' => 'required|numeric',
            'stock6' => 'required|numeric',
        ], [
            'name.required' => 'Este campo es obligatiorio.',
            'price.required' => 'Este campo es obligatiorio.',
            'stock1.required' => 'Este campo es obligatiorio.',
            'stock2.required' => 'Este campo es obligatiorio.',
            'stock3.required' => 'Este campo es obligatiorio.',
            'stock4.required' => 'Este campo es obligatiorio.',
            'stock5.required' => 'Este campo es obligatiorio.',
            'stock6.required' => 'Este campo es obligatiorio.',
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock1' => $request->stock1,
            'stock2' => $request->stock2,
            'stock3' => $request->stock3,
            'stock4' => $request->stock4,
            'stock5' => $request->stock5,
            'stock6' => $request->stock6,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        $product->delete();

        return back();
    }
}
