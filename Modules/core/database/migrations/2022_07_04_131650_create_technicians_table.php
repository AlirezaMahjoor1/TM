<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->id();
            $table->string('name')->max(191);
            $table->string('cell_number')->max(20);
            $table->integer('verified')->nullable();
            $table->string('password')->max(191);
            $table->text('about')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->unsignedInteger('city_id')->default('16');
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('skill_id')->nullable();
            $table->boolean('is_banned')->nullable();
            $table->rememberToken()->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('technicians');
    }
}
