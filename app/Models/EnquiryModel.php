<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryModel extends Model
{
    use HasFactory;

    protected $table="enquiry";

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phoneNumber',
        'message',
    ];

}
