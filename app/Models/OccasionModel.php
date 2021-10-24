<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccasionModel extends Model
{
    use HasFactory;

    protected $table = 'occasion';

    protected $primaryKey = 'id';

    protected $fillable = [
        'userId',
        'event_type',
        'response',
        'cover_image',
        'welcome_image',
    ];

    protected $casts = [
        'response' => 'array'
    ];

}
