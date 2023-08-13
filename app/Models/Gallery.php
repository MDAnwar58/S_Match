<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function allcategory()
    {
    	return $this->belongsTo('App\Models\AllCategory', 'allcategory_id');
    }
    public function category()
    {
    	return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
