<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Outlet extends Migration
{
    public function up()
    {
        Schema::create('outlet', function (Blueprint $table) {
            $table->bigIncrements('id_outlet');
            $table->string('nama_outlet');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('outlet');
    }
}
