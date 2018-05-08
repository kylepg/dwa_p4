<?php

use Illuminate\Database\Seeder;

class AwardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $awards = ['Made A Purchase','Purchased 100 Cups','Purchased 200 Cups'];

        foreach ($awards as $award) {
            $tag = new Tag();
            $tag->name = $tagName;
            $tag->save();
        }
    }
}
