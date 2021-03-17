<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkuPackageModel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'sku_package';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'package_type_id',
        'product_id',
        'package_duration_id',
        'price',
        'special_price',
        'price_usd',
        'special_price_usd',
        'description'
    ];

    protected $casts = [];


}
