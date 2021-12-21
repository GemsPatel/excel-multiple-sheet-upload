<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->integer('nord')->default(0);
            $table->string('prenom_nom')->nullable();
            $table->string('sf')->nullable();
            $table->string('grade')->nullable();
            $table->string('drpp')->nullable();
            $table->string('depart_period_1')->nullable();
            $table->string('retour_period_1')->nullable();
            $table->string('depart_period_2')->nullable();
            $table->string('retour_period_2')->nullable();
            $table->string('depart_period_3')->nullable();
            $table->string('retour_period_3')->nullable();
            $table->string('nbj')->nullable();
            $table->string('reference')->nullable();
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
        Schema::dropIfExists('absences');
    }
}
