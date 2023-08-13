<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
    public function admin()
    {
    	return $this->belongsTo('App\Models\Admin', 'admin_id');
    }
}
