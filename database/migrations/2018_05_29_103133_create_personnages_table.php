<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->increments('id_personnage');
            $table->string('nom')->nullable();
            $table->string('id_lodestone');
            $table->string('job')->nullable();
            $table->string('arme_bis')->nullable();
            $table->string('auxiliaire_bis')->nullable();
            $table->string('tete_bis')->nullable();
            $table->string('torse_bis')->nullable();
            $table->string('main_bis')->nullable();
            $table->string('ceinture_bis')->nullable();
            $table->string('jambe_bis')->nullable();
            $table->string('pied_bis')->nullable();
            $table->string('boucle_oreille_bis')->nullable();
            $table->string('collier_bis')->nullable();
            $table->string('bracelet_bis')->nullable();
            $table->string('bague_1_bis')->nullable();
            $table->string('bague_2_bis')->nullable();
            
            $table->unsignedInteger('id_user');
               
                
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
        Schema::dropIfExists('personnages');
    }
}
