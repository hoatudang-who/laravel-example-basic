<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSalerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_saler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('saler_username');
            $table->string('saler_password');
            $table->string('saler_fullname');
            $table->string('saler_add');
            $table->string('saler_product');
            $table->string('saler_phone');
            $table->string('saler_email');
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
        Schema::dropIfExists('tbl_saler');
    }
}
