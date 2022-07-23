<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;
use App\Models\SkuPackageModel;
use App\Helpers\CustomHelper;

class PaymentController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $productId = auth()->user()->product_id;
        $packageData = SkuPackageModel::select([
            'price',
            'special_price',
            'price_usd',
            'special_price_usd',
            'description',
            'product_name',
            'package_type_name',
            'duration',
            'durationType',
            'product.product_id',
            'package_type.package_type_id',
            'package_duration.package_duration_id',
            'sku_package.sku_package_id'
        ])
        ->join('product', 'product.product_id', '=', 'sku_package.product_id')
        ->join('package_type', 'package_type.package_type_id', '=', 'sku_package.package_type_id')
        ->join('package_duration', 'package_duration.package_duration_id', '=', 'sku_package.package_duration_id')
        ->where('sku_package.product_id', $productId)
        ->get();

        $skuCustomPackage = [];
        if(!empty($packageData)) {
            foreach ($packageData as $packageDetail) {
                $skuCustomPackage[$packageDetail->product_id][$packageDetail->package_type_id][] = $packageDetail->toArray();
            }
        }

        $userData        = CustomHelper::getUserDataByIp();
        $userCountryCode = 'IN';//!empty($userData->geoplugin_countryCode) ? $userData->geoplugin_countryCode :'IN';
        $userCurrency    = ($userCountryCode !== 'IN') ? 'USD' : 'INR';

        $formatePackage = [];
        if(!empty($skuCustomPackage)) {
            foreach ($skuCustomPackage as $productId => $skuCustomPackageDetail) {
                foreach ($skuCustomPackageDetail as $detail) {
                   $uniqueDetail = $detail[0];
                    $durationArr = [];
                    foreach ($detail as $value) {
                        if ($userCurrency == 'USD') {
                                $durationArr[$value['sku_package_id']] = $value['duration'].' '.$value['durationType'].' ($'.number_format($value['price_usd'], 2).')';
                        } else {
                                $durationArr[$value['sku_package_id']] = $value['duration'].' '.$value['durationType'].' (₹'.number_format($value['price'], 2).')';
                        }
                    }
                   $detail[0]['duration'] = $durationArr;
                   $formatePackage[$productId][] = $detail[0];
                }
            }
        }

        $skuCustomPackage = $formatePackage;

        $postReq = [
            'template_name' => \App\Helpers\CustomHelper::getUserTemplateName(),
            'keyword' => '',
            'page_title' => '',
            'page_description' => '',
            'skuCustomPackage'=> $skuCustomPackage
        ];

        return view('user.payment', $postReq);
    }

}
