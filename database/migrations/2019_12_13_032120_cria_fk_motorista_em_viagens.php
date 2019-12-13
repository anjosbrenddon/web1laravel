<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaFkMotoristaEmViagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('viagens', function (Blueprint $table) {
            $table->integer('motorista_id')->unsigned()->index();
            $table->foreign('motorista_id')->references('id')->on('motoristas');
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
            $table->dropForeign(['motorista_id']);
            $table->dropColumn(['motorista_id']);
        });
    }
}
