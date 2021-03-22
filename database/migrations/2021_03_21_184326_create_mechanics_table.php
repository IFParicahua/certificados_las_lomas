<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMechanicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanics', function (Blueprint $table) {
            $table->id();
            $table->decimal('fy', 8, 3);
            $table->decimal('fx', 8, 3);
            $table->decimal('a', 8, 3);
            $table->decimal('re', 8, 3);
            $table->string('d');
            $table->decimal('altura', 8, 3);
            $table->decimal('espaciamiento', 8, 3);
            $table->decimal('gap', 8, 3);
            $table->integer('angulo');
            $table->unsignedBigInteger('lot_id');
            $table->foreign('lot_id')->references('id')->on('lots');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->foreign('package_id')->references('id')->on('package');
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
        Schema::dropIfExists('mechanics');
    }
}
