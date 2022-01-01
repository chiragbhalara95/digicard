<?php

namespace App\Http\Controllers\BussinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyInfoModel;

class CompanyInfoController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $companyData = CompanyInfoModel::where('user_id', $userId)->first();

        return view('user/edit-about', compact('companyData'));
    }

    public function storeCompanyInfo(Request $request)
    {
        $params = $request->all();
        $userId = auth()->user()->id;
        $companyObj = CompanyInfoModel::where('user_id', $userId)->first();
        if (empty($companyObj)) {
            $companyObj = new CompanyInfoModel();
        }

        if ($params['type'] == 'person') {
            $companyObj->user_id = $userId;
            $companyObj->company_profession = $params['company_profession'];
            $companyObj->save();
        } else {
            $companyData = [
                'user_id'            => $userId,
                'company_name'       => $params['company_name'],
                'country_code'       => $params['country_code'],
                'company_mobile'     => $params['company_mobile'],
                'country_landline'   => $params['country_landline'],
                'company_info'       => $params['company_info'],
                'company_address'    => $params['company_address'],
                'latitude'           => $params['latitude'],
                'longitude'          => $params['longitude'],
                'company_website'    => $params['company_website'],
            ];

            if($request->file('company_logo')!='')
            {
                $file             = $request->file('company_logo');
                $filename         = $file->getClientOriginalName();
                $imgname          = date("YmdHis").$filename;
                $companyData['company_logo'] = "upload/bussiness-card/logo/".$imgname;
                $destinationPath  = public_path('upload/bussiness-card/logo/');
                $request->file('company_logo')->move($destinationPath, $imgname);
            }
            
            $companyObj->fill($companyData);
            $companyObj->save();
      
        }

        $request->session()->flash('alert-success', 'Info update successfully');
        return redirect()->back(); 
    }

}
