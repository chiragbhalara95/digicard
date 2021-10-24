<?php

namespace App\Http\Controllers\SaveTheCard;

use Illuminate\Http\Request;
use App\Helpers\Constants;
use App\Models\OccasionModel;
use App\Http\Controllers\BasicController;

class OccasionController extends BasicController
{
    public function occasionView()
    {
        $userId = auth()->user()->id;

        $occasionData = OccasionModel::where('userId', $userId)->first();
        if (!empty($occasionData)) {
            $marriageData = $occasionData->response;
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

        if($request->hasFile('boy_profile')) {
              $file     = $request->file('boy_profile');
              $filename = $file->getClientOriginalName();
              $imgname  = time().'.'.$file->getClientOriginalExtension();
              $destinationPath = public_path('upload/save-the-date/boy_profile/');
              $request->file('boy_profile')->move($destinationPath, $imgname);
              !empty($imgname) && $requestedData['boy_profile']['value'] = $imgname;
          } else {
          	isset($params['boy_profile_old']) && $requestedData['boy_profile']['value'] = $params['boy_profile_old'];
          }

          if($request->hasFile('girl_profile')) {
              $file     = $request->file('girl_profile');
              $filename = $file->getClientOriginalName();
              $imgname  = time().'.'.$file->getClientOriginalExtension();
              $destinationPath = public_path('upload/save-the-date/girl_profile/');
              $request->file('girl_profile')->move($destinationPath, $imgname);
              !empty($imgname) && $requestedData['girl_profile']['value'] = $imgname;
          } else {
  	          	isset($params['girl_profile_old']) && $requestedData['girl_profile']['value'] = $params['girl_profile_old'];
          }

        foreach ($requestedData as $key => $marriageDetail) {
              if (!in_array($marriageDetail['name'], ['boy_profile', 'girl_profile'])) {
                 $requestedData[$key]['value'] = $params[$marriageDetail['name']];
              }

        }

        $data = [
            'userId'     => $userId,
            'event_type' => $params['event_type'],
            'response'   => $requestedData,
            'cover_image' => '',
            'welcome_image' => ''
        ];

        if($request->hasFile('cover_image'))
          {
              $file     = $request->file('cover_image');
              $filename = $file->getClientOriginalName();
              $imgname  = 'cover_image'.time().'.'.$file->getClientOriginalExtension();
              $destinationPath = public_path('upload/save-the-date/cover_image/');
              $request->file('cover_image')->move($destinationPath, $imgname);
              $data['cover_image'] = $imgname;
          }

        if($request->hasFile('welcome_image'))
          {
              $file     = $request->file('welcome_image');
              $filename = $file->getClientOriginalName();
              $imgname  = 'welcome_image'.time().'.'.$file->getClientOriginalExtension();
              $destinationPath = public_path('upload/save-the-date/welcome_image/');
              $request->file('welcome_image')->move($destinationPath, $imgname);
              $data['welcome_image'] = $imgname;
          }

        OccasionModel::updateorcreate(
            ['userId' => $userId],
            $data
);

        //return $this->responseSuccess([], 'Occasion save successfully');
        $request->session()->flash('alert-success','Occasion save successfully');
        return redirect()->back(); 
    }

}
