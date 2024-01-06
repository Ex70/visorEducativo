<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_file', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            // $table->integer('user_id')->unsigned();
            $table->unsignedBigInteger('file_id');
            // $table->integer('file_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('file_id')->references('id')->on('archivos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_file');
    }
};
