<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Post;
  
class SitemapController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($value='')
    {
        $user = User::latest()->get();
  
        return response()->view('sitemap', [
            'users' => $user
        ])->header('Content-Type', 'text/xml');
    }
}