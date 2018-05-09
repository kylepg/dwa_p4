<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    /*
     * Define the many to many relationship with users
     */
    public function user()
    {
        # With timestamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
