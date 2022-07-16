<?php

namespace App\Http\Controllers\BussinessCard;

use Illuminate\Http\Request;
use App\Helpers\Constants;
use App\Models\OccasionModel;
use App\Http\Controllers\BasicController;
use App\Models\ThemeModel;
use App\Models\User;

class ThemeController extends BasicController
{
    public function cardThemeSelectView()
    {
        $userId    = auth()->user()->id;
        $userData  = User::find($userId);
        $tmemeData = ThemeModel::where('product_id', \App\Helpers\Constants::$PRODUCT_THEME['bussiness_card'])
            ->where('status', '1')    
            ->get();
        $postReq = [
            'theme_data' => $tmemeData,
            'theme' => $userData->theme
        ];

        return view('user.save-card.theme-selection', $postReq);
    }

    public function saveUserTheme(Request $request)
    {
        $params    = $request->all();
        $userId    = auth()->user()->id;
        $userData  = User::find($userId);
        $userData->theme = $params['theme'];
        $userData->save();

        $request->session()->flash('alert-success','Theme has been sucessfully updated.');
        return redirect()->back(); 
    }

}
