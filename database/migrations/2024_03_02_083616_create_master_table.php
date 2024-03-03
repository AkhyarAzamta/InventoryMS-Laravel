<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_code');
            $table->string('zahir_code');
            $table->string('item_name');
            $table->string('group');
            $table->string('unit');
            $table->integer('harga');
            $table->string('lokasi');
            $table->string('spart_number');
            $table->string('classification');
            $table->string('image')->default(null);
            $table->integer('updated_by')->unsigned();
            $table->timestamps();

            $table->foreign('updated_by')->references('id')->on('employees')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master');
    }
}
