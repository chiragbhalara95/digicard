<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    public $table = "videos";

    protected $fillable = [
        'user_id',
        'type',
        'title',
        'video_path',
    ];

}
