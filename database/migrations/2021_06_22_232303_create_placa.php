<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placa', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('resp');
            $table->string('contato');
            $table->string('tipo');
            $table->string('data');
            $table->foreignId('fabri_id')->constrained('fabrica');

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
        Schema::dropIfExists('placa');
    }
}
