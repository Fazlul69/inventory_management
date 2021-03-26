<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->String('name');
            $table->String('product_code');
            $table->String('particular')->nullable();
            $table->String('category')->nullable();
            $table->double('product_price')->nullable();
            $table->double('total')->nullable();
            $table->integer('quantity');
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
            $table->timestamps();

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
