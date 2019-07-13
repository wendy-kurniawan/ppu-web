<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BIDANGUMKM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BIDANGUMKM', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('ID_KEGIATAN')->unique();
            $table->char('NAMA_KEGIATAN');
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
        Schema::dropIfExists('BIDANGUMKM');
    }
}
