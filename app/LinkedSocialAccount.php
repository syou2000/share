<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkedSocialAccount extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['provider_name', 'provider_id' ];

}
