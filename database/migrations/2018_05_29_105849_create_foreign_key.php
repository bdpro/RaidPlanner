<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('inscriptions', function (Blueprint $table) {
    $table->foreign('id_event')->references('id')->on('events');
    });
            Schema::table('inscriptions', function (Blueprint $table) {
    $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    });
            Schema::table('blogs', function (Blueprint $table) {
    $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    });
            Schema::table('blogs', function (Blueprint $table) {
     $table->foreign('id_event')->references('id')->on('events');
    });
            Schema::table('web_agency_fails', function (Blueprint $table) {
     $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    });
            Schema::table('personnages', function (Blueprint $table) {
   $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                //effacer clé étrangère lors du rollback
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->dropForeign('inscriptions_id_event_foreign');
        });
                //effacer clé étrangère lors du rollback
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->dropForeign('inscriptions_id_user_foreign');
        });
                //effacer clé étrangère lors du rollback
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign('blogs_id_user_foreign');
        });
                //effacer clé étrangère lors du rollback
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign('blogs_id_event_foreign');
        });
                //effacer clé étrangère lors du rollback
        Schema::table('web_agency_fails', function (Blueprint $table) {
            $table->dropForeign('web_agency_fails_id_user_foreign');
        });
                //effacer clé étrangère lors du rollback
        Schema::table('personnages', function (Blueprint $table) {
            $table->dropForeign('personnages_id_user_foreign');
        });
    }
}
