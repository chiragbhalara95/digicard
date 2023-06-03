<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
  
class SitemapController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($value='')
    {
        $cutoffDate = date("Y-m-d", strtotime('+15 day'));
        $user = User::whereNotNull('slug')->where('package_end_date', '>', $cutoffDate)->latest()->get();

        return response()->view('sitemap', [
            'users' => $user
        ])->header('Content-Type', 'text/xml');
    }

    public function robots()
    {
        return response()->view('robots', [
        ])->header('Content-Type', 'text/txt');
    }
}