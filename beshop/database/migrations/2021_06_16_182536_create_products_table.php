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
            $table->id();
            $table->bigInteger('category_id')->comment('分類ID');
            $table->string('title')->comment('標題');
            $table->string('image')->comment('圖片');
            $table->string('color')->index()->comment('顏色');
            $table->integer('score')->default(5)->comment('評分');
            $table->decimal('sale_price', 8, 2)->nullable()->index()->comment('售價');
            $table->decimal('price', 8, 2)->default(0)->index()->comment('定價');
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
