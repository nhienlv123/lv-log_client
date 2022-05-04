<?php

namespace App\Services\ProductManagement;

use App\Exceptions;
use App\Models\Product;
use App\Services\ProducerManagement\ProducerModelsProxy;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ProductManagementService 
{    
    protected ProductManagementProxy $productManagementProxy;

    public function __construct(ProductManagementProxy $productManagementProxy)
    {
        $this->productManagementProxy = $productManagementProxy;
    }

    public function getProductInfo(int $productId){
        $products = $this->productManagementProxy->findProductById($productId);
        // if (empty($products)) {
        //     throw new ModelNotFoundException;
        // }
        return $products;
    }

    public function addProduct($data){
        $message = $this->productManagementProxy->addProduct($data);        
        return $message;
    }

    public function deleteProduct($id){
        $message = $this->productManagementProxy->deleteProduct($id);        
        return $message;
    }
}