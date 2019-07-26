<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LSBIDANGUKM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LSBIDANGUKM', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('PROFILEUSERS_ID',20);
            $table->char('BIDANGUMKM_ID',12);
            $table->char('ALAMATUMKM');
            $table->char('KONTAKUMKM');
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
        Schema::dropIfExists('LSBIDANGUKM');
    }
}
