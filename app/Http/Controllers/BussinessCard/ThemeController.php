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
            ->orderBy('sortOrder', 'ASC')
            ->orderBy('id', 'ASC')
            ->paginate(4);

        foreach ($tmemeData as $tmemeDetail) {
            $tmemeDetail->options = json_decode($tmemeDetail->options, true);
        }

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
        if (isset($params['color'][$params['theme']])) {
            if ($params['color'][$params['theme']] != 'other') {
                $userData->theme_color = $params['color'][$params['theme']];
            } else {
                if (isset($params['custom_color_code'][$params['theme']])) {
                    $userData->theme_color = "#".$params['custom_color_code'][$params['theme']];
                }
            }
        }
        $userData->save();

        $request->session()->flash('alert-success','Theme has been sucessfully updated.');
        return redirect()->back(); 
    }

}
