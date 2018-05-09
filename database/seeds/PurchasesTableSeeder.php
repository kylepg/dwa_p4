<?php

use Illuminate\Database\Seeder;
use App\Purchase;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchases = [
            [1,1,1,80],
            [2,1,5,400]
        ];
        $count = count($purchases);
        foreach ($purchases as $key => $purchaseData) {
            $purchase = new Purchase();
            $purchase->user_id = $purchaseData[0];
            $purchase->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $purchase->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $purchase->product_id = $purchaseData[1];
            $purchase->quantity = $purchaseData[2];
            $purchase->total_cost = $purchaseData[3];
            $purchase->save();
        }
    }
}
