<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate(
            ['first_name'    => 'Jill',
            'last_name'      => 'Harvard',
            'venmo_username' => 'jillh',
            'role'           => 'admin',
            'payment_due'    => false ,
            'payment_amount' => 0,
            'email'          => 'jill@harvard.edu'],
            ['password'       => Hash::make('helloworld')]
        );

        $user = User::updateOrCreate(
            ['first_name'    => 'John',
            'last_name'      => 'Harvard',
            'venmo_username' => 'johnh',
            'role'           => 'customer',
            'payment_due'    => false ,
            'payment_amount' => 0,
            'email'          => 'john@harvard.edu'],
            ['password'       => Hash::make('whatsupworld')]
        );
    }
}
