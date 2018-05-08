<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('status');
            $table->string('status_updated_at');
            $table->integer('last_edited_by')->unsigned();
            $table->integer('price');

            # Make foreign keys
            $table->foreign('last_edited_by')->references('id')->on('users');
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
        $table->dropForeign('products_last_edited_by_foreign');
        Schema::dropIfExists('products');
    }
}
