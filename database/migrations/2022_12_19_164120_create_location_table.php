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
        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->dateTime("datedebut");
            $table->dateTime("datefin");
            $table->float("prix");
            $table->foreignId("client_id");
            $table->foreignId("voiture_id");
            $table->timestamps();



        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location', function(Blueprint $table){
            $table->dropForeign(["client_id","voiture_id"]);

        });
        Schema::dropIfExists('location');
    }
};