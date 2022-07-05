<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{
    use HasFactory;

    protected $table = 'company_info';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'type',
        'account_no',
        'bank_name',
        'ifsc_code',
        'account_holder_name',
        'account_type',
    ];

    protected $casts = [];

}
