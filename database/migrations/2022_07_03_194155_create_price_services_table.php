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
        Schema::create('price_services', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('price');
            $table->string('type')->nullable();
            $table->string('lineOne')->nullable();
            $table->string('lineTwo')->nullable();
            $table->string('lineThree')->nullable();
            $table->string('lineFour')->nullable();
            $table->string('lineFive')->nullable();
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
        Schema::dropIfExists('price_services');
    }
};
