<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientCollection;
use Exception;
use App\Models\Product;
use App\Services\ProductManagement\ProductManagementService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;


class ProductController extends Controller
{
    protected ProductManagementService $productManagementService;
    
    public function __construct(ProductManagementService $productManagementService)
    {
        $this->productManagementService = $productManagementService;
    }

    public function getProductInfo(Request $request, $productId) {        
        try {
            $this->validate($request, [
                'productId' => 'require|int',
            ]);
            $productId = $productId;
            $products = $this->productManagementService->getProductInfo($productId);
            return response()->json([
                "data" => $products, 
            ]);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

}
