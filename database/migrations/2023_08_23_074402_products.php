<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('laravel9_multi_db1')->create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc')->nullable();
            $table->timestamps();
        });


        Schema::connection('laravel9_multi_db2')->create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc')->nullable();
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
        //
    }
};
