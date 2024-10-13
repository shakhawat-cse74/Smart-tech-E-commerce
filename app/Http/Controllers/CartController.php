<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $product;
    public function index()
    {
        return view('website.cart.index',[
            'cart_products'     =>Cart::content(),
            ]);
    }
    public function add(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id'            => $id,
            'name'          => $this->product->name,
            'qty'           => $request->qty,
            'price'         => $this->product->selling_price,
            'weight'        => 0,
            'options'       => [
                'image'     => $this->product->image ,
                'code'      => $this->product->code ,
            ]
        ]);
        return redirect('/cart/show')->with('message', 'Cart info Add Successfully');
    }
    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart/show')->with('message', 'Cart info Remove Successfully');
    }
    public function update(Request $request, $rowId)
    {
        Cart::update($rowId, $request->qty);
        return redirect('/cart/show')->with('message', 'Cart info Update Successfully');
    }
}
