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
            $table->foreignId('categorie_id')->nullable()->constrained();
            $table->string('title', 150);
            $table->string('description', 500);
            $table->string('slug')->unique();
            $table->integer('view')->default(0);
            $table->string('image', 200);
            $table->float('price', 6, 2);
            $table->float('sale', 6, 2)->nullable();
            $table->boolean('etat_sale')->default(0);
            $table->boolean('pack')->default(0);
            $table->boolean('available_pack')->default(0);
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
