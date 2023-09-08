<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        // Return view products.index with all products
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        // Return view products.create for creating product
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \App\Http\Requests\StoreProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProductRequest $request)
    {
        // Create new product with provided valid data and redirect to index page. 
        $product = new Product;
        $product->title = $request->input('title');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->save();

        return to_route('products.index');
    }

    /**
     * Display the specified resource.
     * 
     * @param \App\Models\Product $product
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(Product $product)
    {
        // Return view products.show with the detail of product
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param \App\Models\Product $product
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Product $product)
    {
        // Return view products.edit with product
        return view('products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \App\Http\Requests\UpdateProductRequest $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //Update product with provided valid data and redirect to products index page
		$product->title = $request->input('title');
		$product->quantity = $request->input('quantity');
		$product->price = $request->input('price');
        $product->save();

        return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        Gate::allowIf(fn (User $user) => $user->is_admin);
        //Delete product and redirect to products index page
        $product->delete();

        return to_route('products.index');
    }
}
