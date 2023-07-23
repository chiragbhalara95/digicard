<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserConfigModel extends Model
{
    use HasFactory;

    protected $table="user_configure";

    protected $fillable = [
        'last_order_no',
        'user_id',
        'isShowNoOfVisit',
        'isShowEnquiry',
        'isShowfeedback',
        'isFeedbackOnWhatsapp',
        'aboutLabel',
        'whatsappMsg',
        'defaultCountry',
    ];

}
