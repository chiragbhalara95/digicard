<?php

namespace App\Http\Controllers\BussinessCard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\socialLink;

class SocialLinkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(!empty(auth()->user()) && auth()->user()->is_admin === 1){
            return redirect('/admin/home')->with('error',"You don't have admin access.");
        }

        $userId              = auth()->user()->id;
        $page_title          = 'Add Social Media Link';
        $socialMediaLinkData = socialLink::where('user_id', $userId)->get();
        $allSocialMedia      = socialLink::ALL_SOCIAL_MEDIA;

        return view('user/user-bussiness/social-link/list', compact('socialMediaLinkData', 'allSocialMedia', 'page_title'));
    }

    public function addLinkView()
    {
        if(!empty(auth()->user()) && auth()->user()->is_admin === 1){
            return redirect('/admin/home')->with('error',"You don't have admin access.");
        }

        $page_title          = 'Add Social Media Link';
        $allSocialMedia      = socialLink::ALL_SOCIAL_MEDIA;

        return view('user/user-bussiness/social-link/create', compact('allSocialMedia', 'page_title'));
    }

    public function saveSocialLink(Request $request)
    {
        $userId = auth()->user()->id;
        $type   = $request->type;
        $socialMediaLinkData = socialLink::where('user_id', $userId)->where('type', $type)->first();
        if (!empty($socialMediaLinkData)) {
            socialLink::where('user_id', $userId)->where('type', $type)->update([
                'url' => $request->url
            ]);
        } else {
            socialLink::insert([
                'type'    => $type,
                'url'     => $request->url,
                'user_id' => $userId,
            ]);
        }

          return redirect(route('business.social-media-master-list'))->with("success", 'Social Media link has been sucessfully added.'); 
    }

    public function editLinkView($id) {
        $userId = auth()->user()->id;
        $socialMediaLinkData = socialLink::where('id', $id)->first();
        if (empty($socialMediaLinkData)) {
          return redirect(route('business.social-media-master-list'))->with("error", 'Invalid Request.'); 
        }

        $page_title          = 'Edit Social Media Link';
        $allSocialMedia      = socialLink::ALL_SOCIAL_MEDIA;

        return view('user/user-bussiness/social-link/create', compact('socialMediaLinkData', 'allSocialMedia', 'page_title'));
    }

    public function deleteLinkView($id)
    {
        $userId = auth()->user()->id;
        $socialMediaLinkData = socialLink::where('id', $id)->first();
        if (!empty($socialMediaLinkData)) {
            socialLink::where('id', $id)->delete();

          return redirect(route('business.videos.list'))->with("success", 'Videos has been deleted sucessfully.'); 
        }


          return redirect(route('business.videos.list'))->with("error", 'Invalid Request.'); 
    }

}
