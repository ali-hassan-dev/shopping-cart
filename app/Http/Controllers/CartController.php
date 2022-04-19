<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart.cart');
    }

    public function add_to_cart($id)
    {
        $product=Products::FindOrFail($id);
        $cart_items=session()->get('cartItems', []);
        if(isset($cart_items[$id]))
        {
            $cart_items[$id]['quantity']++;
        }
        else
        {
            $cart_items[$id]=[
                "image_path"=>$product->image_path,
                "details"=>$product->details,
                "name"=>$product->name,
                "brand"=>$product->brand,
                "price"=>$product->price,
                "quantity"=>1
            ];
        }
        session()->put('cartItems',$cart_items);
        return redirect()->back()->with('success','Product added to cart!');
    }

    public function delete_from_cart(Request $request)
    {
        if($request->id)
            $cart_items=session()->get('cartItems');
            if(isset($cart_items[$request->id]))
            {
                unset($cart_items[$request->id]);
                session()->put('cartItems',$cart_items);
            }
            return redirect()->back()->with('success','Product deleted successfully.');
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cartItems = session()->get('cartItems');
            $cartItems[$request->id]["quantity"] = $request->quantity;
            session()->put('cartItems', $cartItems);
        }
        return redirect()->back()->with('success', 'Product added to cart!');
    }
}