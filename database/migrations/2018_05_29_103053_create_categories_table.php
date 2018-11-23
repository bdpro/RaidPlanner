<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id_categories');
            $table->string('libelle_categorie',30)->unique();
            $table->boolean('arme')->nullable();
            $table->boolean('auxiliaire')->nullable();
            $table->boolean('tete')->nullable();
            $table->boolean('torse')->nullable();
            $table->boolean('main')->nullable();
            $table->boolean('ceinture')->nullable();
            $table->boolean('jambe')->nullable();
            $table->boolean('pied')->nullable();
            $table->boolean('boucle_oreille')->nullable();
            $table->boolean('collier')->nullable();
            $table->boolean('bracelet')->nullable();
            $table->boolean('bague_1')->nullable();
            $table->boolean('bague_2')->nullable();
            
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
        Schema::dropIfExists('categories');
    }
}
