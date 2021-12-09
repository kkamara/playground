<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->unsignedBigInteger('query_types_id');
            $table->unsignedBigInteger('call_stats_id');
            $table->unsignedBigInteger('campaigns_id');
            $table->timestamps();
            
            $table->foreign('query_types_id')->references('id')->on('query_types');
            $table->foreign('call_stats_id')->references('id')->on('call_stats');
            $table->foreign('campaigns_id')->references('id')->on('campaigns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreigns');
    }
}
