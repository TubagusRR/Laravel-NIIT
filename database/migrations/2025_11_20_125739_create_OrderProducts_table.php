<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderProducts', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('order_id')->nullable()->index('order_id');
            $table->integer('product_id')->nullable()->index('product_id');
            $table->integer('jumlah')->nullable();
            $table->decimal('harga_satuan', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OrderProducts');
    }
};
