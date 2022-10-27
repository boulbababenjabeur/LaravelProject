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
        Schema::create('velo', function (Blueprint $table) {
            $table->id()->unsigned()->index();
            
            $table->timestamps();
            $table->string('nomVelo');
            $table->string('couleur');
            $table->string('type');

            $table->string('photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('velo');
    }
};
