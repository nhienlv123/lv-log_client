<?php

namespace App\Services\ProductManagement;

use App\Models\Product;
use App\Models\Size;
use App\Models\Type_map;


class ProductManagementProxy {
    public function findProductById(int $productId) {
        //return ($productId);
        return Product::with('sizes')
            ->with('type_maps')
            ->find($productId);
    }

    public function addProduct($data) {
        $products = new Product();
        $products->name = data_get($data, 'name');
        $products->price = data_get($data, 'price');
        $products->color = data_get($data, 'color'); 
        $products->description = data_get($data, 'description');
        $products->image = data_get($data, 'image'); 
        $products->save();

        $sizes = new Size();
        $sizes->product_id = $products->id;
        $sizes->size = data_get($data, 'size');
        $sizes->quantity = data_get($data, 'quantity');
        $sizes->save();

        foreach ($data['typeId'] as $a) {
            $type_maps = new Type_map();
            $type_maps->product_id = $products->id;
            $type_maps->type_id = $a;
            $type_maps->save();
        }       

        return 'OKKK';
    }

    public function deleteProduct($id) {
        $sizes = Size::where('product_id',$id);
        $sizes->delete();

        $type_maps = Type_map::where('product_id',$id);
        $type_maps->delete();

        $products = Product::find($id);
        $products->delete();
        return response()->json('successfully deleted');
    }
}