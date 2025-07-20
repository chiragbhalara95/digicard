<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;

        /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'blogs';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
    ];

    protected $casts = [];

}
