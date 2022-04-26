<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientCollection;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;
use App\Models\Type_map;
use App\Models\Type;

class ClientController extends Controller
{
    public function getClient() {        
        $types = Type::all();
        $products = Product::all();
        return response()->json(["products"=>$products, "types"=>$types]);        
    }

    // public function getDetail(Product $products, Size $sizes, Type_map $type_maps) {
    //     $details = $products
    //         ->join('sizes', 'sizes.product_id', '=', 'products.id')
    //         ->select('products.*', 'sizes.*')
    //         ->get();
    //     return response()->json($product);
    // }
}
