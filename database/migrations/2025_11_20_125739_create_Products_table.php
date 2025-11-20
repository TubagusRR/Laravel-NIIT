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
        Schema::create('Products', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('kategori_id')->nullable()->index('kategori_id');
            $table->string('nama', 150)->nullable();
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10)->nullable();
            $table->integer('stok')->nullable();
            $table->string('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
};
