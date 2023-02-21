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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name', 63)->index();
            $table->string('slug', 63)->unique();
            $table->string('image', 63);
            $table->string('manager', 63);
            $table->string('phone', 31)->unique();
            $table->string('address', 127);
            $table->string('latitude', 31)->nullable();
            $table->string('longitude', 31)->nullable();
            $table->string('email', 31)->unique();
            $table->string('description', 255);
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
        Schema::dropIfExists('shops');
    }
};
