<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function category()
    {
        return $this->belongsTo('Category', 'category_id');
    }

    public function location()
    {
        return $this->belongsTo('Location', 'location_id');
    }
}
