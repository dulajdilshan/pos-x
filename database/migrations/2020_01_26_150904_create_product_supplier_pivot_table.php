<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSupplierPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_supplier', function (Blueprint $table) {
            $table->unsignedInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->unsignedInteger('product_id');
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
        Schema::dropIfExists('product_supplier');
    }
}
