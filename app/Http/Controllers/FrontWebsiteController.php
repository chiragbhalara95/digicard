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
use App\Models\EnquiryModel;
use Validator;
use Mail;
use App\Models\UserConfigModel;
use App\Models\PaymentModel;
use App\Models\socialLink AS SocialLinkModel;
use App\Models\VisitorLog;

class FrontWebsiteController extends BasicController
{
    public function index()
    {
        $productData = ProductModel::select('product_id', 'product_name')->where('status', 1)->get()->toArray();
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
        ->where('product.status', 1)
        ->get();

        $skuCustomPackage = [];
        if(!empty($packageData)) {
            foreach ($packageData as $packageDetail) {
                $skuCustomPackage[$packageDetail->product_id][$packageDetail->package_type_id][] = $packageDetail->toArray();
            }
        }

        // $userData        = CustomHelper::getUserDataByIp();
        // $userCountryCode = !empty($userData->geoplugin_countryCode) ? $userData->geoplugin_countryCode :'IN';
        // $userCountryCode = 'IN';
        // $userCurrency    = ($userCountryCode !== 'IN') ? 'USD' : 'INR';
        $userCurrency = 'INR';
        if (!empty(env('CURRENCY'))) {
            $userCurrency = env('CURRENCY');
        }

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

    public function userVisitCard(Request $request, $slug)
    {
        $userObj = User::where('slug', $slug)->first();
        if(empty($userObj)) {
            return redirect('/')->with('error', "Your url is wrong, Please contact admin.");
        }

        $themeData         = \DB::table('table_theme')->where('id', $userObj->theme)->first();
        if(empty($themeData)) {
             return redirect('user/occasion')->with('error', "Please configure account.");
        }

        if(empty($userObj->package_end_date) || $userObj->package_end_date < date("Y-m-d H:i:s")) {
            return redirect('/')->with('error', "Your package is expired, please do payment.");
        }

        $bladeFile = !empty($themeData) ? $themeData->blade_file : 'theme-a';

        $isVisitedCount = $request->session()->get('is_count_visitor_'.$userObj->id, 0);
        if ($isVisitedCount == 0) {
            // $userObj->no_visit = $userObj->no_visit+1
            User::where('slug', $slug)->update(['no_visit' => $userObj->no_visit+1]);
            $request->session()->put('is_count_visitor_'.$userObj->id, 1);

            VisitorLog::insert([
                'slug'    => $slug,
                'ip'      => \Request::getClientIp(true),
                'browser' => substr($request->header('User-Agent'), 0, 250),
            ]);

        }

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
        } else if ($userObj->product_id == \App\Helpers\Constants::$PRODUCT_THEME['bussiness_card']) {
            $userConfigObj   = UserConfigModel::where('user_id', $userObj->id)->first();
            if (empty($userConfigObj)) {
                $userConfigObj   = New UserConfigModel();
                $userConfigObj->fill([
                    'user_id' => $userObj->id,
                    'isShowNoOfVisit' => '1',
                    'isShowEnquiry' => '1',
                    'isShowfeedback' => '1',
                ])->save();
            }
            $companyInfoData = CompanyInfoModel::where('user_id', $userObj->id)->first();
            $galleryData     = \DB::table('gallery')->where('user_id', $userObj->id)->get();
            $paymentMasterData = PaymentModel::where('user_id', $userObj->id)->get();
            $socialMediaData   = SocialLinkModel::where('user_id', $userObj->id)->get();

            if (!empty($companyInfoData->company_address)) {
                $unwanted = [
                    '<p>',
                    '</p>'
                ];
                foreach ($unwanted as $tag) {
                    $companyInfoData->company_address = preg_replace('<'.$tag.'>', '', $companyInfoData->company_address);
                }
            }

            $galleryCatData     = \DB::table('gallery')->where('user_id', $userObj->id)->whereNotNull('category_name')->where('category_name', '!=', '')->pluck('category_name')->toArray();

            $galleryCatInfo = [];
            if (!empty($galleryCatData)) {
                foreach ($galleryCatData as $galleryCatDetail) {
                    $slug = \Str::slug($galleryCatDetail);
                    $galleryCatInfo[$slug] = $galleryCatDetail;
                }
            }

            if (!empty($galleryData)) {
                foreach ($galleryData as $galleryDetail) {
                    $galleryDetail->category_name = \Str::slug($galleryDetail->category_name);
                }
            }

            $vistingUrl = url('vc').'/'.$userObj->slug;

            return view('visitingCard/bussinessCard/'.$bladeFile, 
                compact('companyInfoData', 'userObj', 'galleryData', 'userConfigObj', 'paymentMasterData', 'socialMediaData', 'galleryCatInfo', 'vistingUrl')
            );
        }

    }

    public function SavePrevCard(Request $request, $visitor_id)
    {
        $userInfo     = \DB::table('users')->where('slug', $visitor_id)->first();
        $userId       = $userInfo->id;
        $companyInfo  = \DB::table('company_info')->where('user_id', $userId)->first();
        $name         = $userInfo->name;
        $company_name = $companyInfo->company_name;
        $email        = $userInfo->email;
        $mobile_no    = $companyInfo->country_code.$companyInfo->company_mobile;
        $landline_no  = $companyInfo->country_landline;
        $vistiURL     = url('vc/').'/'.$userInfo->slug;

        $vCard = "BEGIN:VCARD\r\n";
        $vCard .= "VERSION:3.0\r\n";
        $vCard .= "FN:" . $name . "\r\n";
        $vCard .= "TITLE:" . $company_name . "\r\n";
    
        if($email){
            $vCard .= "EMAIL;TYPE=internet,pref:" . $email . "\r\n";
        }

        if($mobile_no){
            $vCard .= "TEL;TYPE=work,voice:" . $mobile_no . "\r\n"; 
        }

        if ($landline_no) {
            $vCard .= "TEL;TYPE=work,voice:" . $landline_no . "\r\n";   
        }

        if ($vistiURL) {
            $vCard .= "URL:" . $vistiURL . "\r\n";   
            //$vCard .= "NOTE:" . $vistiURL . "\r\n";
        }

        $vCard .= "END:VCARD\r\n";
        header('Content-Description: Download vCard');
        header('Content-Type: text/vcard');
        header('Content-Disposition: attachment; filename='.$name.'.vcf');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        ob_clean();
        flush();
        echo $vCard;
        exit;
    }

    public function sendEnquiry(Request $request)
    {
        $params = $request->all();

        $validator = Validator::make($params, [
            'name' => 'required|min:2',
            'email'      => 'required|email',
            'phoneNumber' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseError(implode(",", $validator->errors()->all()));
        }

        $slug = $params['slug'];
        $userObj = User::where('slug', $slug)->first();
        $companyInfoData = CompanyInfoModel::where('user_id', $userObj->id)->first();
        $userConfigObj   = UserConfigModel::where('user_id', $userObj->id)->first();

        EnquiryModel::create([
            'user_id'     => $userObj->id,
            'name'        => $params['name'],
            'email'       => $params['email'],
            'phoneNumber' => $params['phoneNumber'],
            'message'     => $params['message'],
        ]);

        $data = [];
        $subject            = "New Quick Inquiry message";
        $data['subject']    = $subject;
        $data['to']         = $userObj->email;
        $data['from']       = env('MAIL_USERNAME');
        $data['first_name'] = $params['name'];
        $data['email']      = $params['email'];
        $data['contact_no'] = $params['phoneNumber'];
        $data['message']    = $params['message'];
        // Mail::send('email.inquiry-mail', ['data'=>$data], function ($message) use($data) 
        // {
        //     $message->from($data['from']);
        //     $message->to($data['to'])->subject($data['subject']); 
        // });

        $successRes = 'Thank you for contacting us. One of us will get back to you as soon as possible.';

        $url = '';
        $userConfigObj   = UserConfigModel::where('user_id', $userObj->id)->first();
        if ($userConfigObj->isFeedbackOnWhatsapp == '1') {
            $url = "https://api.whatsapp.com/send?phone=".str_replace('+','',$companyInfoData->country_code).$companyInfoData->company_mobile."&text=Get%20New%20Inquiry:: ".urlencode($params['message']);
        }

        return $this->responseSuccess(['redirect' => $url], $successRes);
    }

    public function downloadQrCode(Request $request, $slug)
    {
        $vistingUrl = url('vc').'/'.$slug;
        $image = \QrCode::format('png')
                     ->size(500)
                     ->errorCorrection('H')
                     ->margin(10)
                     ->generate($vistingUrl);
        header('Content-Description: Download vCard QR Code');
        header('Content-Type: image/png');
        header('Content-Disposition: attachment; filename='.$slug.'.png');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        ob_clean();
        flush();

        echo $image;exit;
    }

    public function search(Request $request)
    {
        $params = $request->all();
        $keywords = isset($params['keywords']) ? $params['keywords'] : null;
        $cityName = isset($params['city_name']) ? $params['city_name'] : null;

        $userData = User::leftJoin('company_info As cinfo', 'cinfo.user_id', '=', 'users.id')
            ->whereNotNull('users.slug')
            ->where('users.package_end_date', '>', date('Y-m-d'));

        if (!empty($keywords)) {
            $userData->where(function($query) use($keywords){
                $query->where('cinfo.company_name', 'LIKE', '%'.$keywords.'%')
                        ->orWhere('users.name', 'LIKE', '%'.$keywords.'%');
            });
        }

        if (!empty($cityName)) {
            $userData->where('cinfo.company_address', 'LIKE', '%'.$cityName.'%');
        }

        $userData = $userData->paginate(10);

        return view('frontView/search', compact('userData'));
    }

}
