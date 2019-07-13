<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class INPTLEMBAGA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INPTLEMBAGA', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('IDLEMBAGA',10)->unique(); 
            $table->char('NAMALEMBAGA');
            $table->char('ALAMATLEMBAGA');
            $table->char('KONTAK');
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
        Schema::dropIfExists('INPTLEMBAGA');
    }
}
