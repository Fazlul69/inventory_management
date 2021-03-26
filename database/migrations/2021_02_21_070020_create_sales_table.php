<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->String('s_product_code');
            $table->String('s_product_name');
            $table->integer('s_quantity');
            $table->String('s_product_particular')->nullable();
            $table->String('s_product_category')->nullable();
            $table->double('s_product_price')->nullable();
            $table->double('total')->nullable();
            $table->String('customer_info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
