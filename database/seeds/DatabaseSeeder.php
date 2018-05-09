<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(AwardsTableSeeder::class);
        $this->call(UserAwardTableSeeder::class);
    }
}
