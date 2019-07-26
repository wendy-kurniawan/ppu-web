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
            $table->bigIncrements('NO');
            $table->char('PROFILE_ID',20)->unique();
            $table->char('NAMALENGKAP',70);
            $table->date('TANGGALLAHIR');
            $table->char('NOHP');
            $table->char('GAMBAR');
            $table->mediumText('BIOGRAFI');
            $table->enum('JENISKL',['Mohon Di ISI','Perempuan','Laki-Laki']);
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
