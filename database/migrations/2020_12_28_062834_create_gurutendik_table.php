<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurutendikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurutendik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 45);
            $table->string('jabatan', 45);
            $table->text('motto');
            $table->string('foto');
            $table->string('facebook', 45)->nullable();
            $table->string('instagram', 45)->nullable();
            $table->string('twitter', 45)->nullable();
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
        Schema::dropIfExists('gurutendik');
    }
}
