<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products')); //ver
    }
    public function create() {
        return view('admin.products.create'); //formulario
    }
    public function store(Request $request) {
        //salvar cambios
        // dd($request->all()); //muestra los datos de el fomulario
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
        $product->save(); // insert
        return redirect('/admin/products');
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));
    }

    public function update(Request $request, $id) {
        //salvar cambios
        // dd($request->all()); //muestra los datos de el fomulario
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
        $product->save(); // update
        return redirect('/admin/products');
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete(); //borrar producto
        return back();
    }



}
