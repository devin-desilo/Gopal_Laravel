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
            $table->string('name');
            $table->text('description')->nullable();
            $table->json('images')->nullable(); // JSON field to store multiple images
            $table->decimal('price', 8, 2);
            $table->string('category')->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->string('sku')->unique()->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->json('dimensions')->nullable(); // JSON field to store dimensions
            $table->json('reviews')->nullable(); // JSON field to store multiple reviews
            $table->string('manufacturer')->nullable();
            $table->date('expiry_date')->nullable();
            $table->json('tags')->nullable(); // JSON field to store tags
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
