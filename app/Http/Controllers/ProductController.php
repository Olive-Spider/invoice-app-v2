<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    public function all_products(){
        $products = Product::orderBy('id', 'DESC')->get();
        return response()->json([
            'products' => $products
        ],200);
    }
}
