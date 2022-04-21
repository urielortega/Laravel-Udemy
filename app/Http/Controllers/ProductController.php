<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        // Usando Query Builder:
        // $products = DB::table('products')->get();

        // Usando Modelos:
        // $products = Product::all();

        // dd($products);
        // return $products;

        return view('products.index')->with([
            'products' => Product::all(),
        ]);
    }

    public function create() {
        return view('products.create');
    }

    public function store() {
        // $product = Product::create([
        //     'title' => request()->title,
        //     'description' => request()->description,
        //     'price' => request()->price,
        //     'stock' => request()->stock,
        //     'status' => request()->status,
        // ]);

        $product = Product::create(request()->all());

        // return redirect()->back(); // Redirigir hacia atrás
        // return redirect()->action('MainController@index'); // Redirigir hacia una acción (La función index de MainController)
        return redirect()->route('products.index'); // Redirigir a una ruta

    }

    public function show($product) {
        // Usando Query Builder:
        // $product = DB::table('products')->where('id', $product)->first();
        // $product = DB::table('products')->find($product);

        // Usando Modelos:
        // $product = Product::find($product);
        $product = Product::findOrFail($product); // Muestra un error 404, en lugar de null

        // dd($product);
        // return $product;

        return view('products.show')->with([
            'product' => $product, // El primer nombre es la variable que se envía a show.blade.php
        ]);
    }

    public function edit($product) {
        return view('products.edit')->with([
            'product' => Product::findOrFail($product),
        ]);
    }

    public function update($product) {
        $product = Product::findOrFail($product); 

        $product->update(request()->all());

        return redirect()->route('products.index');
    }

    public function destroy($product) {
        $product = Product::findOrFail($product); 

        $product->delete();

        return redirect()->route('products.index');
    }

}
