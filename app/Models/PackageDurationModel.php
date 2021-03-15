<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDurationModel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'package_duration';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'package_duration_id';

    protected $fillable = [
        'duration',
        'durationType'
    ];

    protected $casts = [];

}
