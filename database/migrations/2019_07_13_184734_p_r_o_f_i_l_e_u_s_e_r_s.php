<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PROFILEUSERS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PROFILEUSERS', function (Blueprint $table) {
            $table->bigIncrements('no');
            $table->char('PROFILEUSERS_ID',100)->unique();
            $table->char('NAMALENGKAP',50);
            $table->date('TANGGALLAHIR');
            $table->char('WILAYAH');
            $table->char('NOHP');
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
        Schema::dropIfExists('PROFILEUSERS');
    }
}
