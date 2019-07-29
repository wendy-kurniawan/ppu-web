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
            $table->date('TANGGALLAHIR')->nullable();
            $table->char('NOHPUMKM',13)->nullable();
            $table->char('NOHP',13)->nullable();
            $table->char('GAMBAR')->nullable();
            $table->mediumText('BIOGRAFI')->nullable();
            $table->enum('JENISKL',[' ','Perempuan','Laki-Laki']);
            $table->char('ALAMATUMKM')->nullable();
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
