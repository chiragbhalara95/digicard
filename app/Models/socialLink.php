<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialLink extends Model
{
    use HasFactory;

    protected $table      = 'social_links';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'type',
        'url',
    ];

    protected $casts = [];

    const ALL_SOCIAL_MEDIA = [
        'fb' => 'Facebook',
        'in' => 'Instagram',
        'li' => 'linkedin',
        'tw' => 'Twitter',
        'pi' => 'Pinterest',
        'yt' => 'YouTube',
        'tg' => 'Telegram',
    ];

}
