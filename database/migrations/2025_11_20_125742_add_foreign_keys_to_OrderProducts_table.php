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
        Schema::table('OrderProducts', function (Blueprint $table) {
            $table->foreign(['order_id'], 'orderproducts_ibfk_1')->references(['id'])->on('Orders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['product_id'], 'orderproducts_ibfk_2')->references(['id'])->on('Products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('OrderProducts', function (Blueprint $table) {
            $table->dropForeign('orderproducts_ibfk_1');
            $table->dropForeign('orderproducts_ibfk_2');
        });
    }
};
