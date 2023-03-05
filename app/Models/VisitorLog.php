<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    use HasFactory;

    public $table = "visitor_log";

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'slug',
        'ip',
        'browser'
    ];

}
