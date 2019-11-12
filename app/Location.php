<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = [
        'location_name'
    ];

    public function details()
    {
        return $this->hasMany('Detail', 'location_id');
    }
}
