<?php

namespace App\Http\Controllers;

use App\Models\Add_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Add_ProductController extends Controller
{
    public function create()
    {
        return view('add_product.create');
    }

    public function store(Request $request)
    {
        $add_product = new Add_Product;
        $add_product->id = $request->input('id');
        //$add_product->id = fake()->randomNumber('id');
        $add_product->product = $request->input('product');
        $add_product->quantity = $request->input('quantity');
        $add_product->price = $request->input('price');
        $add_product->save();
        return redirect()->back()->with('status','Product Added Successfully');
    }

    
}
