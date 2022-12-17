<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coin()
    {
        return $this->belongsTo(Coins::class);
    }
}
