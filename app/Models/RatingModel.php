<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingModel extends Model
{
    use HasFactory;

    protected $table ="rating";

    const API_KEYS = [
        'user_id',
        'rating_count',
        'name',
        'comment',
        'is_active'
    ];

    protected $fillable = self::API_KEYS;

    protected $casts = [
    ];

    public static function addUpdateRating(array $params, $id = '')
    {
        if (empty($params)) {
            return false;
        }

        if (empty($id)) {
            $ratingObj = new self();
        } else {
            $ratingObj = self::find($id);
            if (empty($ratingObj)) {
                $ratingObj = new self();
            }
        }

        $params = array_intersect_key($params, array_flip(self::API_KEYS));
        $ratingObj->fill($params);
        $ratingObj->save();

        return $ratingObj;
    }

}
