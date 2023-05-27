<?php

namespace App\Http\Controllers\BussinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Videos;
use App\Http\Controllers\BasicController;

class VideosController extends BasicController
{
    public function index() {
        if(!empty(auth()->user()) && auth()->user()->is_admin === 1){
            return redirect('/admin/home')->with('error',"You don't have admin access.");
        }

        $page_title = "Videos";
        $userId     = Auth::user()->id;
        $data['videosData'] = Videos::where('user_id', $userId)->orderBy('id', 'DESC')->get();

        return view('user.user-bussiness.videos.list',compact('page_title'), $data);

    }

    public function deleteVideo($id)
    {
        $userId = auth()->user()->id;
        $videoData = Videos::where('id', $id)->first();
        if (!empty($videoData)) {
            Videos::where('id', $id)->delete();

            return $this->responseSuccess();
        }

        return $this->responseError('Invalid Request.');
    }

    public function add(Request $request)
    {
        $page_title = "Add Video";
        $data = [];
        return view('user.user-bussiness.videos.add',compact('page_title'), $data);

    }

    public function save(Request $request)
    {
        $params = $request->all();
        $id = isset($params['id']) ? $params['id'] : null;
        $userId = auth()->user()->id;

        $videoData = [
            'type' => 'yt',
            'title' => isset($params['title']) ? $params['title'] : null,
            'video_path' => $params['video_path'],
        ];

        if(!empty($id)) {
            Videos::where('id', $id)->update($videoData);
        } else{
            $videoData['user_id'] = $userId;
            Videos::create($videoData);
        }

        return $this->responseSuccess();

    }

    public function edit(Request $request, $id)
    {
        $page_title = "Edit Video";
        $data['videoData'] = Videos::where('id', $id)->first();
        return view('user.user-bussiness.videos.add',compact('page_title'), $data);
    }

}
