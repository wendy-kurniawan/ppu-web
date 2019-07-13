<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class INPTSKILL extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INPTSKILL', function (Blueprint $table) {
            $table->bigIncrements('NO');
            $table->char('PROFILEUSERS_ID',10);
            $table->char('IDSKILL',10);
            $table->char('NAMASKILL');
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
        Schema::dropIfExists('INPTSKILL');
    }
}
