<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChemicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemical', function (Blueprint $table) {
            $table->id();
            $table->string('lote_quimica');
            $table->decimal('c', 8, 3);
            $table->decimal('mn', 8, 3);
            $table->decimal('si', 8, 3);
            $table->decimal('p', 8, 3);
            $table->decimal('s', 8, 3);
            $table->unsignedBigInteger('lot_id');
            $table->foreign('lot_id')->references('id')->on('lots');
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
        Schema::dropIfExists('chemical');
    }
}
