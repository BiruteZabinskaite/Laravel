<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    public function owners()
    {
        return $this->belongsToMany('App\Owner')
                    ->withPivot('from_date', 'to_date')->withTimestamps();

    }
}