<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('category_id')->comment('หมวดหมู่สินค้า');
            $table->string('thumbnail')->comment('รูปสินค้า');
            $table->string('name')->comment('ชื่อสินค้า');
            $table->integer('quantity')->comment('จำนวน');
            $table->text('detail')->comment('รายละเอียดสินค้า');
            $table->float('price')->comment('ราคาสินค้า');
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
        Schema::dropIfExists('products');
    }
}
