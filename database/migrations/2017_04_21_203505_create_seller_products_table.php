<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_products', function (Blueprint $table) {
            $table->integer('seller_id')->unsigned();
            $table->foreign('seller_id')
                ->references('id')
                ->on('sellers');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('seller_products');
    }
}
