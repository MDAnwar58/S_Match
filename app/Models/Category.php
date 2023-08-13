<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function allcategory()
    {
    	return $this->belongsTo('App\Models\AllCategory', 'allcategory_id');
    }
}
