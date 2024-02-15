<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;


class WebController extends Controller
{
    public function welcome()
    {
        $products = Products::all();

        return view('welcome', ['products' => $products]);
    }
    
    public function index()
    {
        $products = Products::all();

        return view('dashboard', ['products' => $products]);
    }


    
    public function addform()
    {
        return view('add');
    }

    public function updateForm($id)
    {
        $product = Products::findOrFail($id);
        return view('update', compact('product'));
    }
}
