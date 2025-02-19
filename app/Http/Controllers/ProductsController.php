<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()

    { 
        $products = Product::latest()->get();
        return view('home', compact('products'));
     
    }

    public function addProduct(){
        return view('add_product');
    }

    public function store(Request $request){
       $product = new Product();
       $product->product_name = $request->product_name;
       $product->product_price = $request->product_price;
       $product->product_weight = $request->product_weight;
       $product->product_description = $request->product_description;
       $product->status = $request->status;


       $product->save();
       return redirect()->route('home');
   

       
    }

public function edit($id){
    $product = Product::findorfail($id);
    return view('edit', compact('product'));    
}


public function update(Request $request, $id){
    $product = Product::findorfail($id);
    $product->product_name = $request->product_name;
    $product->product_price = $request->product_price;
    $product->product_weight = $request->product_weight;
    $product->product_description = $request->product_description;
    $product->status = $request->status;
    $product->update();
    return redirect()->route('home');

}



    public function delete($id){
        $product = Product::findorfail($id);
        $product->delete();
        return redirect()->route('home');
    }

    public function status($id){
        $product = Product::findorfail($id);
        if($product->status == 1){
            $product->status = 0;
        }else{
            $product->status = 1;
        }
        $product->update();
        return redirect()->route('home');
    }
}
