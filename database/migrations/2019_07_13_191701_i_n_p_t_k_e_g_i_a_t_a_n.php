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
            $table->char('IDKEGIATAN',12);
            $table->char('IDNARASUMBER',12);
            $table->char('NAMANARASUMBER',70);
            $table->enum('JKKEGIATAN',['WORKSHOP','SEMINAR']);
            $table->char('JUDULACARA')->nullable();
            $table->char('LOKASI',120)->nullable();
            $table->mediumText('KETKEGIATAN')->nullable();
            $table->dateTime('TGLMULAI')->nullable();
            $table->dateTime('TGLSELESAI')->nullable();
            $table->char('GAMBAR',191);
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
