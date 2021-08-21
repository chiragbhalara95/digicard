<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Constants;
use App\Models\OccasionModel;

class OccasionController extends Controller
{
    public function occasionView()
    {
        $userId = auth()->user()->id;

        $occasionData = OccasionModel::where('userId', $userId)->first();
        if (!empty($occasionData)) {
            $marriageData = json_decode($occasionData->response, true);
        } else {
            $marriageData = Constants::$MARRIAGE_FORM;
        }


        $postReq = [
            'template_name'    => \App\Helpers\CustomHelper::getUserTemplateName(),
            'keyword'          => '',
            'page_title'       => '',
            'page_description' => '',
            'marriageData'     => $marriageData,
            'occasionData'     => $occasionData,
        ];

        return view('user.edit-occasion', $postReq);
    }

    public function saveOccasion(Request $request)
    {
        $userId        = auth()->user()->id;
        $params        = $request->all();
        $requestedData = [];
        switch ($params['event_type']) {
            case 'marriage':
                $requestedData = Constants::$MARRIAGE_FORM;
                break;
        }

        foreach ($requestedData as &$marriageDetail) {
            $marriageDetail['value'] = $params[$marriageDetail['name']];
        }

        OccasionModel::updateorcreate(
            ['userId' => $userId],
            [
            'userId'     => $userId,
            'event_type' => $params['event_type'],
            'response'   => json_encode($requestedData),
            'cover_image' => '',
            'welcome_image' => ''
        ]);

        return redirect(route('edit-occasion-view'))->with('success',"saved successfully");
    }

}
