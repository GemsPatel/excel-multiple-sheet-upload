<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exceptions', function (Blueprint $table) {
            $table->id();
            $table->integer('no')->default(0);
            $table->string('prenoms_et_nom')->nullable();
            $table->string('gde')->nullable();
            $table->string('mle')->nullable();
            $table->string('sf')->nullable();
            $table->string('depart')->nullable();
            $table->string('depart_h')->nullable();
            $table->string('arrivee')->nullable();
            $table->string('arrivee_h')->nullable();
            $table->string('object_de_la_mission')->nullable();
            $table->string('copie_ci_joint')->nullable();
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
        Schema::dropIfExists('exceptions');
    }
}
