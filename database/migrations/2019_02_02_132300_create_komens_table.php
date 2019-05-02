<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komens', function (Blueprint $table) {
            $table->increments('komid');
            $table->integer('komforid');
            $table->string('komjud');
            $table->text('komis');
            $table->string('komgam');
            $table->integer('komauth');
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
        Schema::dropIfExists('komens');
    }
}
