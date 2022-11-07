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
        Schema::create('book', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tytul');
            $table->string('cena');
            $table->string('ilosc_stron');
            $table->string('ilosc_sztuk');
            $table->unsignedInteger('wydawnictwo_id');
            $table->unsignedInteger('autor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
};
