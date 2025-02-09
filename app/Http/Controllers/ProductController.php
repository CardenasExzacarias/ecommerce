<?php

namespace App\Http\Controllers;

use App\Http\Requests\products\SaveProductRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $search = $request->query('search');
        $products = ProductRepository::all($search);

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveProductRequest $request)
    {
        $status = ProductRepository::store($request->validated());

        return to_route('product.create')
            ->with('status', $status);
    }

    /**
     * Display the specified resource.
     */
    public function show($barcode)
    {
        $product = ProductRepository::find($barcode);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($barcode)
    {
        $product = ProductRepository::find($barcode);

        return view('products.edit', compact('product'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(SaveProductRequest $request, $barcode)
    {
        $product = ProductRepository::find($barcode);
        $product->update($request->validated());
    
        return redirect()->route('product.edit', $product->barcode)
            ->with('status', 'Producto actualizado correctamente');
    }

    public function destroy($barcode, Request $request)
    {
        $product = ProductRepository::find($barcode);
        ProductRepository::destroy($product);
        $page = $request->input('page', 1);
        return redirect()->route('product.index', ['page' => $page])
            ->with('status', 'Producto eliminado correctamente.');
    }

    public function search(Request $request)
    {
        $name = $request->query('search');
        $products = ProductRepository::search($name);

        if ($request->query('index') == 'true') {
            return view('products.index', compact('products'));
        }

        return response()->json($products);
    }
}
