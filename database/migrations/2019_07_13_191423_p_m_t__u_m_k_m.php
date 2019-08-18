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
            $table->char('IDMASALAH',12);
            $table->char('IDNARASUMBER',12);
            $table->char('IDUMKM',12);
            $table->char('NAMANARASUMBER',70);
            $table->char('NAMAUMKMPMT',70);
            $table->char('GAMBARNARASUMBER',191)->nullable();
            $table->mediumText('KETERANGANPMT')->nullable();
            $table->char('TLPUMKM',13)->nullable();
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
