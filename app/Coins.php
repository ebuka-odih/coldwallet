<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coins extends Model
{
    public function fund()
    {
        return $this->hasMany(Fund::class, 'coin_id');
    }
}
