<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Administradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Administradores', function (Blueprint $table) {
            $table->bigIncrements('id_admin');
            $table->string('name_admin',50);
            $table->string('app',50);
            $table->string('apm',50);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');  
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Administrador');
    }
}
