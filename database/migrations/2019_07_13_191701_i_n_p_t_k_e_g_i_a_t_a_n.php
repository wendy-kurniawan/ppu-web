<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class INPTKEGIATAN extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INPTKEGIATAN', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('IDUMKM',10);
            $table->char('IDNARASUMBER',10);
            $table->char('JUDULACARA');
            $table->mediumText('KETKEGIATAN');
            $table->dateTime('TGLMULAI');
            $table->dateTime('TGLSELESAI');

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
        Schema::dropIfExists('INPTKEGIATAN');
    }
}
