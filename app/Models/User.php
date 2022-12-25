<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\SkuPackageModel;
use Auth;
use Str;

class User extends Authenticatable //implements MustVerifyEmail
{
    //use HasFactory, Notifiable;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'sku_package_id',
        'profile_pic',
        'name',
        'email',
        'password',
        'is_admin',
        'phone',
        'country_code',
        'theme',
        'slug',
        'no_visit',
        'email_verified_at',
        'profile_config',
        'package_start_date',
        'package_end_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function product()
    {
        return $this->hasOne('App\Models\ProductModel', 'product_id', 'product_id');
    }

    public static function initUserPayment($userId)
    {
        $userObj = self::find($userId);
        $userObj->profile_config = 2;

        $skuPackageId = $userObj->sku_package_id;
        $packageData  = SkuPackageModel::select([
            'price',
            'special_price',
            'price_usd',
            'special_price_usd',
            'duration',
            'durationType',
            'package_duration.package_duration_id',
            'sku_package.sku_package_id',
            'product_id'
        ])
        ->join('package_duration', 'package_duration.package_duration_id', '=', 'sku_package.package_duration_id')
        ->where('sku_package.sku_package_id', $skuPackageId)
        ->first();
        $duration                    = $packageData->duration." ".$packageData->durationType;
        $userObj->package_start_date = date("Y-m-d");
        $userObj->package_end_date   = date("Y-m-d", strtotime($userObj->package_start_date . $duration));
        if (empty($userObj->slug)) {
            $userObj->slug = self::createSlug($userObj->name);
        }

        $userObj->save();

        Auth::setUser($userObj);

        return true;
    }

    public static function createSlug($title){
        $slug = Str::slug($title);
        if (self::where('slug', $slug)->exists()) {
            $slug = $slug.date("Ymdhis");
        }
  
        return $slug;
    }

}
