<?php

namespace App\Services\ProductManagement;

use App\Models\Product;
use App\Models\Size;

class ProductManagementProxy {
    public function findProductById(int $productId) {
        //return ($productId);
        return Product::with('sizes')
            ->find($productId);
    }
}