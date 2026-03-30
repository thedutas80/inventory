<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.product.index', [
            'items' => $products,
            'title' => 'Semua Produk'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('pages.product.create', [
            'title' => 'tambah produk'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request-> all();
        $data['image'] = $request->file('image')->store('assets/product', 'public');

        Product::create($data);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findorfail($id);
        return view('pages.product.edit', [
            'product' => $product,
            'title' => 'edit data'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

    
$data = $request->all();

if ($request->hasFile('image')) {
    $data['image'] = $request->file('image')->store('assets/product', 'public');
} else {
    unset($data['image']); // biar tidak ke-update
}


        Product::findorfail($id)->update($data);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {


        Product::findorfail($id)->delete();
        return redirect()->route('products.index');
    }
}
