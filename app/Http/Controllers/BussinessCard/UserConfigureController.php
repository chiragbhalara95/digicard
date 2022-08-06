<?php

namespace App\Http\Controllers\BussinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserConfigModel;

class UserConfigureController extends Controller
{
    public function getUserConfigure(Request $request)
    {
        $userId = auth()->user()->id;
        $userConfigData = UserConfigModel::where('user_id', $userId)->first();

        return view('user/user-bussiness/user-configure', compact('userConfigData'));
    }

    public function storeUserConfigure(Request $request)
    {
        $params = $request->all();
        $userId = auth()->user()->id;
        $configureData = [
            'defaultCountry' => $params['defaultCountry'],
            'whatsappMsg' => $params['whatsappMsg'],
            'aboutLabel' => $params['aboutLabel'],
            'isShowNoOfVisit' => $params['isShowNoOfVisit'],
            'isShowEnquiry' => $params['isShowEnquiry'],
            'isFeedbackOnWhatsapp' => $params['isFeedbackOnWhatsapp'],
        ];
        UserConfigModel::where('user_id', $userId)->update($configureData);

        return redirect()->back()->with("success", "Setting update successfully"); 
    }

}
