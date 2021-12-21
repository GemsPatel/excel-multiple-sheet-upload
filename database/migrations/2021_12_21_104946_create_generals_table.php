<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->integer('no')->default(0);
            $table->string('noms_et_prenoms')->nullable();
            $table->string('mle')->nullable();
            $table->string('gde')->nullable();
            $table->string('sf')->nullable();
            $table->string('depart')->nullable();
            $table->string('depart_h')->nullable();
            $table->string('arrivee')->nullable();
            $table->string('arrivee_h')->nullable();
            $table->string('object_de_la_mission')->nullable();
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
        Schema::dropIfExists('generals');
    }
}
