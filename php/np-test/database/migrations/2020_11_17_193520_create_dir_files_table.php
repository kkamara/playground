<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dir_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dir_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('dir_id')->references('id')->on('dirs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dir_files');
    }
}
