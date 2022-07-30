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
            $table->id()->startingValue(100);
            $table->string('name')->max(191);
            $table->enum('sex',['male','female'])->default('male');
            $table->string('father_name')->nullable()->max(255);
            $table->string('cell_number')->max(20);
            $table->integer('verified')->nullable();
            $table->string('password')->max(191);
            $table->string('store')->nullable();
            $table->text('address')->nullable();
            $table->enum('technical_degree',['yes','no'])->default('no');
            $table->string('degree_file')->nullable();
            $table->text('about')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->unsignedInteger('city_id')->default('16');
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('skill_id')->nullable();
            $table->boolean('is_banned')->nullable();
            $table->enum('star_degree',[1,2,3,4,5])->default('1');
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
