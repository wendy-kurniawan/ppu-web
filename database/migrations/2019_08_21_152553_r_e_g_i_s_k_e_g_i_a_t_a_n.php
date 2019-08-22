<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class REGISKEGIATAN extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REGISKEGIATAN', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('IDKEGIATAN',12);
            $table->char('IDUSER',12)->nullable();
            $table->char('NAMAPESERTA',70);
            $table->char('NAMAUMKM',70)->nullable();
            $table->char('EMAILPESERTA',120);
            $table->char('HANDPHONEPESERTA',13);
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
        Schema::dropIfExists('REGISKEGIATAN');
    }
}
