<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeocharttestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geocharttests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->integer('count');
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
        Schema::dropIfExists('geocharttests');
    }
}
?>
<!--
    public function up()
    {
        Schema::create('tablename', function (Blueprint $table) {
            $table->increments('id'); -table values
            $table->string('country'); -table values
            $table->integer('count'); -table values
            $table->timestamps();
        });
    }
 -->