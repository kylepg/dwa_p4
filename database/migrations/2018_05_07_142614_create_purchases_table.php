<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('quantity');
            $table->integer('total_cost');

            # Make foreign keys
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        # combine tablename + fk field name + the word "foreign"
        $table->dropForeign('purchases_user_id_foreign');
        $table->dropForeign('purchases_product_id_foreign');
        
        Schema::dropIfExists('purchases');
    }
}
