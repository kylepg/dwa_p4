<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'venmo_username', 'role', 'payment_due', 'payment_amount'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * Define the one to many relationship with purchases
     */
    public function purchases()
    {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('App\Purchase');
    }
}
