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
    public function getType() {
        $types = Type::all();
        $products = Product::all();
        return response()->json(["products"=>$products, "types"=>$types]);
        // return new ClientCollection(Type::all());
    }
    public function getProduct() {
        $product = Product::all();
        return response()->json($product);
    }
}
