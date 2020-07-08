<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homePage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('banner1');
            $table->text('banner2');
            $table->text('banner3');
            $table->text('banner4');
            $table->text('banner5');
            $table->text('banner6');
            $table->text('banner7');
//            $table->string('content');
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
        Schema::dropIfExists('home_page');
    }
}
