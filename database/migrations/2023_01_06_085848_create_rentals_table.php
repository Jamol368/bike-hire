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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bikes_id')->index()->constrained()->cascadeOnUpdate();
            $table->foreignId('users_id')->index()->constrained()->cascadeOnUpdate();
            $table->date('rental_start_date');
            $table->date('rental_end_date');
            $table->date('rental_closed_date')->nullable();
            $table->smallInteger('status')->default(1);
            $table->string('description', 255)->nullable();
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
        Schema::dropIfExists('rentals');
    }
};
