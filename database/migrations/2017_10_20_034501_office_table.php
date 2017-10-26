<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office',function(Blueprint $table){
            $table->integer('officeid');
            $table->char('officename',50);
            $table->char('location',50);
            $table->timestamps();
            // $table->datetime('adate');
            // $table->datetime('udat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('office');
    }
    
    
}
