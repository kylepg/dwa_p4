<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function user()
    {
        # Purchase belongs to User
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\User');
    }
}
