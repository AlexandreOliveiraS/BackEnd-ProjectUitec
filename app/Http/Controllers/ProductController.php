<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class ProductController extends Controller
{
 
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

   
    public function store(Request $request)
    {
        $stores = new Product ([
            'category' => $request->input('category'),
            'nomeproduto' => $request->input('nomeproduto'),
            'valorproduto' => $request->input('valorproduto'),
            'datavencimento' => $request->input('datavencimento'),
            'quantidadeestoque' => $request->input('quantidadeestoque'),
            'produtoperecivel' => $request->input('produtoperecivel')
        ]);
        $stores->save();
        return response()->json('Product created!');
    }


  
    public function update(Request $request, string $id)
    {
        $updates = Product::find($id);
        return response()->json($updates);
    }

    
    public function destroy(string $id)
    {
        $destroys = Products::find($id);
        return response()->json($destroys);
    }
}
