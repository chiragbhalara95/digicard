<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\SkuPackageModel;

class FrontWebsiteController extends Controller
{
    public function index()
    {

        $productData = ProductModel::select('product_id', 'product_name')->get()->toArray();
        $packageData = SkuPackageModel::select(['price',
            'special_price',
            'price_usd',
            'special_price_usd',
            'description',
            'product_name',
            'package_type_name',
            'duration',
            'durationType',
            'product.product_id'
        ])
        ->join('product', 'product.product_id', '=', 'sku_package.product_id')
        ->join('package_type', 'package_type.package_type_id', '=', 'sku_package.package_type_id')
        ->join('package_duration', 'package_duration.package_duration_id', '=', 'sku_package.package_duration_id')
        ->get();
        $skuCustomPackage = [];
        if(!empty($packageData)) {
            foreach ($packageData as $packageDetail) {
                $skuCustomPackage[$packageDetail->product_id][] = $packageDetail->toArray();
            }
        }

        return view('frontView/home', compact('productData', 'skuCustomPackage'));
    }

}
