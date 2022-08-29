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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('role')->default('0');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('pesertaDrawing_id')->nullable();
            $table->foreign('pesertaDrawing_id')->references('id')->on('pesertas')->nullable();
            $table->unsignedInteger('pesertaSinging_id')->nullable();
            $table->foreign('pesertaSinging_id')->references('id')->on('pesertas')->nullable();
            $table->unsignedInteger('pesertaDancing_id')->nullable();
            $table->foreign('pesertaDancing_id')->references('id')->on('pesertas')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
