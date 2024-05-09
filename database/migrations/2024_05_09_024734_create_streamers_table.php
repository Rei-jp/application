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
        Schema::create('streamers', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->varchar('name',30);
            $table->integer('streamer_category_id');
            $table->text('streamer_URL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('streamers');
    }
};
