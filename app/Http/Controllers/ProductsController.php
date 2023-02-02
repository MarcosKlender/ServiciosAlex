<?php

namespace App\Http\Controllers;

use App\Models\Products;
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
            'products' => Products::orderBy('id', 'desc')->get()
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
            'stock_alejo' => 'required|numeric',
            'stock_andy' => 'required|numeric',
            'stock_rodolfo' => 'required|numeric',
            'stock_kevin' => 'required|numeric',
            'stock_hector' => 'required|numeric',
            'stock_jenny' => 'required|numeric',
        ], [
            'name.required' => 'Este campo es obligatiorio.',
            'price.required' => 'Este campo es obligatiorio.',
            'stock_alejo.required' => 'Este campo es obligatiorio.',
            'stock_andy.required' => 'Este campo es obligatiorio.',
            'stock_rodolfo.required' => 'Este campo es obligatiorio.',
            'stock_kevin.required' => 'Este campo es obligatiorio.',
            'stock_hector.required' => 'Este campo es obligatiorio.',
            'stock_jenny.required' => 'Este campo es obligatiorio.',
        ]);

        $product = Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock_alejo' => $request->stock_alejo,
            'stock_andy' => $request->stock_andy,
            'stock_rodolfo' => $request->stock_rodolfo,
            'stock_kevin' => $request->stock_kevin,
            'stock_hector' => $request->stock_hector,
            'stock_jenny' => $request->stock_jenny,
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
            'stock_alejo' => 'required|numeric',
            'stock_andy' => 'required|numeric',
            'stock_rodolfo' => 'required|numeric',
            'stock_kevin' => 'required|numeric',
            'stock_hector' => 'required|numeric',
            'stock_jenny' => 'required|numeric',
        ], [
            'name.required' => 'Este campo es obligatiorio.',
            'price.required' => 'Este campo es obligatiorio.',
            'stock_alejo.required' => 'Este campo es obligatiorio.',
            'stock_andy.required' => 'Este campo es obligatiorio.',
            'stock_rodolfo.required' => 'Este campo es obligatiorio.',
            'stock_kevin.required' => 'Este campo es obligatiorio.',
            'stock_hector.required' => 'Este campo es obligatiorio.',
            'stock_jenny.required' => 'Este campo es obligatiorio.',
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock_alejo' => $request->stock_alejo,
            'stock_andy' => $request->stock_andy,
            'stock_rodolfo' => $request->stock_rodolfo,
            'stock_kevin' => $request->stock_kevin,
            'stock_hector' => $request->stock_hector,
            'stock_jenny' => $request->stock_jenny,
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
