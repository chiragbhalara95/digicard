<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteOrderModel extends Model
{
    use HasFactory;
    protected $table = 'quote_order';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contactNo',
        'address',
        'array_product',
    ];

    protected $casts = [];

}
