<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;


class ProductsController extends Controller
{
    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product = new Products();

        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->stock_quantity = $validatedData['quantity'];

        $product->save();

        return redirect('/api/products');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product = Products::findOrFail($id);

        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->stock_quantity = $validatedData['quantity'];

        $product->save();

        return view('view', compact('product'));
    }

    public function delete($id)
    {
        $product = Products::findOrFail($id);

        $product->delete();

        return redirect('/api/products');
    }

    public function view($id)
    {
        $product = Products::findOrFail($id);

        return view('view', compact('product'));
    }
}
