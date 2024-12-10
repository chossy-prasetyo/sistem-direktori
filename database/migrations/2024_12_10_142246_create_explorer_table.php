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
        Schema::create('explorer', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->integer('parent')->nullable();
            $table->string('type', 100);
            $table->string('name', 255);
            $table->string('file', 255)->nullable();
            $table->integer('order');
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('explorer');
    }
};
