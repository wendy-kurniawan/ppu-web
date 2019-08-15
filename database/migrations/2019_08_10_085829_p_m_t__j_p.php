<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PMTJP extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PMT_JP', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('IDMASALAH',12);
            $table->char('JKMASALAH',120)->nullablle();
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
        Schema::dropIfExists('PMT_JP');
    }
}
