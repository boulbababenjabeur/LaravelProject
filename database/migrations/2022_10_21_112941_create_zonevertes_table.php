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
        Schema::create('zonevertes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomZone');
            $table->string('surfaceZone');
            $table->string('Gouvernorat');
            $table->string('Délégation');
            $table->string('Localité');
            $table->string('PremierResponsable');






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zonevertes');
    }
};
