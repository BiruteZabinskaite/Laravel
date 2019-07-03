<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function autos()
    {
        return $this->belongsToMany('App\Auto')
                    ->withPivot('from_date', 'to_date')->withTimestamps();
    }
}
