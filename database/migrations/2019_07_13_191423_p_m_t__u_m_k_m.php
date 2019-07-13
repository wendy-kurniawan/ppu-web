<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PMTUMKM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PMT_UMKM', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('IDNARASUMBER',10);
            $table->char('IDUMKM VARCHAR',10);
            $table->mediumText('KETERANGANPMT');
            $table->mediumText('PERMASALAHAN');
            $table->enum('STATUSPMT',['WAIT','REJECT','APPROVE']);
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
        Schema::dropIfExists('PMT_UMKM');
    }
}
