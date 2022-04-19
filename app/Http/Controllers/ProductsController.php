<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products=Products::all();
        return view('shop.index', compact('products'));
    }
    
    public function show($id)
    {
        $product=Products::FindOrFail($id);
        return view('shop.show',compact('product'));
    }
}
