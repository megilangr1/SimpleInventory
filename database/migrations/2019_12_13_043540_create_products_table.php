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
						$table->bigIncrements('id');
						$table->string('name');
						$table->text('description');
						$table->double('price');
						$table->unsignedBigInteger('category_id');
						$table->unsignedBigInteger('type_id');
						$table->unsignedBigInteger('supplier_id');
						$table->foreign('category_id')->references('id')->on('categories');
						$table->foreign('type_id')->references('id')->on('types');
						$table->foreign('supplier_id')->references('id')->on('suppliers');
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
