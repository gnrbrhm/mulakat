<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('p_id');
            $table->integer('c_id');
            $table->integer('s_fiyat');
            $table->integer('s_adet');
            $table->integer('i_orani')->default(0);
            $table->integer('t_tutar');
            $table->integer('t_satistutari');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satis');
    }
}
