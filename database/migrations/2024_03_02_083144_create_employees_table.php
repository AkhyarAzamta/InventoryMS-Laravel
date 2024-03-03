<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('job_title');
            $table->integer('machine_id')->unsigned();
            $table->integer('no_mc_id')->unsigned();
            $table->string('shift');
            $table->timestamps();

            $table->foreign('machine_id')->references('id')->on('machine')->onDelete('cascade');
            $table->foreign('no_mc_id')->references('id')->on('no_mc')->onDelete('cascade'); // Merujuk ke kolom 'id' di tabel 'no_mc'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

