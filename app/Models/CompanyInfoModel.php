<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfoModel extends Model
{
    use HasFactory;

    protected $table = 'company_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'company_name',
        'gst_number',
        'company_logo',
        'company_alt_logo',
        'company_profession',
        'country_code',
        'company_mobile',
        'country_landline',
        'company_info',
        'company_address',
        'latitude',
        'longitude',
        'company_website',
        'broucher_file',
        'seo_keyword',
        'seo_description'
    ];

    protected $casts = [];

}
