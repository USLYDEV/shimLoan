<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index (){
        //This line will fecth all the data from the database
        $products = Product::all();
        //This display the data to view
        return view('products.index', ['products' => $products]);    
       
    }  
    
    public function create (){
        return view('products.create');
    }

    public function store (Request $request){
        // This dump data in frontend
        // dd($request);
    
        // validate data before submission
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required | numeric',
            'price' => 'required | decimal:0,2',
            'description' => 'nullable',
   


        ]);
            //This save the create new product submission into database
            $newProduct = Product::create($data);

            //This auto return the user to homepage on submission
            return redirect(route('products.index'));
        }
}


