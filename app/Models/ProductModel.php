<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'product';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name'
    ];

    protected $casts = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'product_id', 'product_id');
    }

}
