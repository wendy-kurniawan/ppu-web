<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LEMBAGA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LSLEMBAGA', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('PROFILEUSERS_ID',12);
            $table->char('IDLEMBAGA',12);
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
        Schema::dropIfExists('LSLEMBAGA');
    }
}
