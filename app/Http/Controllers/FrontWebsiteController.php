<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\SkuPackageModel;
use App\Helpers\CustomHelper;
use App\Models\User;
use App\Models\OccasionModel;
use App\Models\OccasionEventsModel;
use App\Helpers\Constants;
use App\Models\CompanyInfoModel;

class FrontWebsiteController extends Controller
{
    public function index()
    {
        $productData = ProductModel::select('product_id', 'product_name')->get()->toArray();
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
        ->get();

        $skuCustomPackage = [];
        if(!empty($packageData)) {
            foreach ($packageData as $packageDetail) {
                $skuCustomPackage[$packageDetail->product_id][$packageDetail->package_type_id][] = $packageDetail->toArray();
            }
        }

        $userData        = CustomHelper::getUserDataByIp();
        $userCountryCode = !empty($userData->geoplugin_countryCode) ? $userData->geoplugin_countryCode :'IN';
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

        $countryData = file_get_contents('public/country-tel-code.json');
        $countryData = json_decode($countryData, true);
        $selectedCode = '+91';

        return view('frontView/home', compact('productData', 'skuCustomPackage','userCurrency', 'countryData', 'selectedCode'));
    }

    public function userVisitCard($slug)
    {
        $userObj = User::where('slug', $slug)->first();
        $themeData         = \DB::table('table_theme')->where('id', $userObj->theme)->first();
        if(empty($themeData)) {
             return redirect('user/occasion')->with('error', "Please configure account.");
        }

        $bladeFile = !empty($themeData) ? $themeData->blade_file : 'theme-a';

        if ($userObj->product_id == \App\Helpers\Constants::$PRODUCT_THEME['save_card']) {
            $occasionData = OccasionModel::where('userId', $userObj->id)->first();
            if (!empty($occasionData)) {
                $marriageData = $occasionData->response;
                $marriageData['event_date']['value'] = str_replace("/", "-", $marriageData['event_date']['value']);
            } else {
                $marriageData = Constants::$MARRIAGE_FORM;
            }

            $occasionEventData = OccasionEventsModel::select('*')->where('occasion_id', $occasionData->id)->orderBy('event_time', 'ASC')->get();

            return view('visitingCard/saveTheCard/'.$bladeFile, compact('marriageData', 'userObj', 'occasionData', 'occasionEventData'));
        }else if ($userObj->product_id == \App\Helpers\Constants::$PRODUCT_THEME['bussiness_card']) {
            $companyInfoData = CompanyInfoModel::where('user_id', $userObj->id)->first();
            return view('visitingCard/bussinessCard/'.$bladeFile, compact('companyInfoData', 'userObj'));
        }

    }

}
