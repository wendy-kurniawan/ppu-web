<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HASILKUESIONER extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilkuesioner', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('IDKEGIATAN',12);            
            $table->char('IDUSER',12);
            $table->integer('JAWABAN');
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
        Schema::dropIfExists('hasilkuesioner');
    }
}
