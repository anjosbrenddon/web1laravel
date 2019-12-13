<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaFkCaminhaoEmViagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('viagens', function (Blueprint $table) {
            $table->integer('caminhao_id')->unsigned()->index();
            $table->foreign('caminhao_id')->references('id')->on('caminhoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('viagens', function (Blueprint $table) {
            $table->dropForeign(['caminhao_id']);
            $table->dropColumn(['caminhao_id']);
        });
    }
}
