<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JKMASALAH extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JKMASALAH', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('IDMASALAH',12);
            $table->char('NAMAMASALAH',70);
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
        Schema::dropIfExists('JKMASALAH');
    }
}
