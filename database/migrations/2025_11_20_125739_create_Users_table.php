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
        Schema::create('Users', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->nullable()->unique('email');
            $table->string('password')->nullable();
            $table->enum('role', ['admin', 'customer'])->nullable();
            $table->string('alamat')->nullable();
            $table->string('telepon', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Users');
    }
};
