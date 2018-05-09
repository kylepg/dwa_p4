<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['Cold Brew','Out', 80],
            ['Vanilla Cream','Out', 0],
            ['Love Buzz Beans','Out', 0]
        ];
        $count = count($products);
        foreach ($products as $key => $productData) {
            $product = new Product();
            $product->name = $productData[0];
            $product->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $product->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $product->status = $productData[1];
            $product->last_updated_by = 1;
            $product->status_updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $product->price = $productData[2];
            $product->save();
        }
    }
}
