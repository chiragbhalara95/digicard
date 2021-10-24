<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccasionEventsModel extends Model
{
    use HasFactory;

    protected $table = 'occasion_event_list';

    protected $primaryKey = 'id';

    protected $fillable = [
        'occasion_id',
        'name',
        'event_time',
        'invite_by',
        'address',
    ];

    protected $casts = [
    ];

}
