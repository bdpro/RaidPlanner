<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebAgencyFailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_agency_fails', function (Blueprint $table) {
            $table->increments('id_waf');
            $table->string('titre',150)->nullable();
            $table->text('texte',255)->nullable();
            
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
        Schema::dropIfExists('web_agency_fails');
    }
}
