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
        Schema::create('conjuros', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->id();
            $table->string('nombre');
            $table->integer('nivel');
            $table->bigInteger('escuela_id')->unsigned();
            $table->string('descripción');
            $table->timestamps();
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conjuros');
    }
};
