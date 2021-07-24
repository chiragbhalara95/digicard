<?php
namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class CustomHelper {

    public function __construct() {
    }

    public static function getUserDataByIp()
    {
        $ipData = self::getStorageVal('user_ip_info');
        if (!empty($ipData)) {

            return $ipData;
        }

        $ipAddress = self::get_client_ip();
        $ipData = @json_decode(file_get_contents( "http://www.geoplugin.net/json.gp?ip=" . $ipAddress)); 
        self::storeStorageVal('user_ip_info', $ipData);

        return $ipData;
    }

    public static function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }

    public static function storeStorageVal($name, $val)
    {
        Cache::forever($name, $val);
    }

    public static function getStorageVal($name)
    {
        return Cache::get($name, '');
    }

    public static function getUserTemplateName()
    {
        $templateName = '';
        $productName = auth()->user()->product()->first()->product_name;
        switch ($productName) {
            case 'Save The Card':
                $templateName = 'save-card';
                break;
        }

        return $templateName;
    }

}
