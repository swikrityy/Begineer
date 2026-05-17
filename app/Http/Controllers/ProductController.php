<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas= Product::get();
        // dd($datas);
        return view('admin.product.index', compact('datas'));
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Product::create($request->all());
    return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view ('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
       $product->update($request->all());
       return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
       $product->delete();

        return redirect()->route('product.index');

    }
}
