<?php

use App\Award;
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
        $count = count($awards);
        foreach ($awards as $awardTitle) {
            $award = new Award();
            $award->title = $awardTitle;
            $award->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $award->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $award->save();
        }
    }
}
