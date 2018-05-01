<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableWorkers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->string('position');
            $table->date('work_start');
            $table->integer('salary');
            $table->integer('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');    }
}
