<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BasicController;
use Validator;
use App\Models\CompanyInfoModel;
use App\Models\User;
use App\Models\ProductModel;
use App\Models\SkuPackageModel;
use App\Models\ThemeModel;
use Hash;
use Illuminate\Support\Str;
use App\Models\UserVerify;
use App\Models\UserConfigModel;

class DigitalcardController extends BasicController
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createDigitalCard()
    {
        if(!empty(auth()->user()) && auth()->user()->is_admin === 0){
            return redirect('/')->with('error',"You don't have admin access.");
        }

        $countryData = file_get_contents('public/country-tel-code.json');
        $countryData = json_decode($countryData, true);
        $selectedCode = '+91';

        return view('admin/digitalcard/create', compact('countryData', 'selectedCode'));
    }

    public function saveDigitalCard(Request $request)
    {
        $params = $request->all();

        $validator = Validator::make($params, [
            'name' => 'required|min:2',
            'company_name'  => 'required|min:2',
            'company_mobile' => 'required|min:10',
            'email'      => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseError(implode(",", $validator->errors()->all()));
        }

        $isEmailExists = User::where('email', $params['email'])->exists();
        if ($isEmailExists) {
            return $this->responseError('Email id is exist, try another');
        }

        $slug = Str::of($params['company_name'])->slug('-');
        $isSlugExist = User::where('slug', $slug)->exists();
        if ($isSlugExist) {
            $slug = $slug.date('Ymdhis');
        }

        $productData = ProductModel::select('product_id')->where('product_name', 'Business Card')->first();
        $skuData = SkuPackageModel::select('sku_package_id')->where('product_id', $productData->product_id)->first();
        $themeData = ThemeModel::select('id')->where('product_id', $productData->product_id)->first();

        $user      =  User::create([
            'product_id'     => $productData->product_id,
            'sku_package_id' => $skuData->sku_package_id,
            'name'           => $params['name'],
            'email'          => $params['email'],
            'slug'           => $slug,
            'country_code'   => $params['country_code'],
            'phone'          => $params['company_mobile'],
            'email_verified_at' => date("Y-m-d H:i:s"),
            'profile_config' => 2,
            'package_start_date' => date("Y-m-d"),
            'package_end_date' => date('Y-m-d', strtotime(date("Y-m-d"). ' + 4 days')),
            'password'       => Hash::make($params['password']),
            'is_admin'       => 0,
            'theme'          => $themeData->id
        ]);

        $companyData = [
            'user_id'            => $user->id,
            'company_name'       => $params['company_name'],
            'country_code'       => $params['country_code'],
            'company_mobile'     => $params['company_mobile'],
        ];
        CompanyInfoModel::create($companyData);

        $token = Str::random(64);
        UserVerify::create([
            'user_id' => $user->id, 
            'token'   => $token
        ]);

        $userConfigObj   = New UserConfigModel();
        $userConfigObj->fill([
            'user_id' => $user->id,
            'isShowNoOfVisit' => '1',
            'isShowEnquiry' => '1',
            'isShowfeedback' => '1',
        ])->save();

        return $this->responseSuccess();
    }

}
