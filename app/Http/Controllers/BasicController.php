<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    protected $userTemplateName = '';

    public function __construct()
    {
    }

    public function responseError($msg='Error',$params = [], $responseKey = 'data') {
        return response()->json([
            'code' => -1,
            'msg' => $msg,
            $responseKey => $params
        ]);
    }

    public function responseSuccess($params = [], $msg="Success",$responseKey = 'data') {
        return response()->json([
            'code' => 0,
            'msg'  => $msg,
            $responseKey => $params
        ]);
    }

}
