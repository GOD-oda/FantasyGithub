<?php

namespace App\DataAccess\Eloquent;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $fillable = [
        'provider_name', 'provider_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\DataAccess\Eloquent\User');
    }
}
