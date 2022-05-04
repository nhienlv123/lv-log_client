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

    public function addProduct(Request $request) {        
        $data = [];
        $data['name'] = $request->get('name');
        $data['typeId'] = data_get($request->get('type'),'*.id');
        $data['color'] = $request->get('color');
        $data['price'] = $request->get('price');
        $data['size'] = $request->get('size');
        $data['quantity'] = $request->get('quantity');
        $data['image'] = $request->get('image');
        $data['description'] = $request->input('description');

        $message = $this->productManagementService->addProduct($data);
        return response()->json([
            "message" => $message, 
        ]);
    }

    public function deleteProduct($id) {
        $message = $this->productManagementService->deleteProduct($id);
        return response()->json([
            "message" => $message, 
        ]);
    }
}
