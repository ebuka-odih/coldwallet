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

    public function status()
    {
        if ($this->status == 1)
        {
            return "<span class='badge bg-success'>Successful</span>";
        }
        return "<span class='badge bg-warning'>Pending</span>";
    }
}
