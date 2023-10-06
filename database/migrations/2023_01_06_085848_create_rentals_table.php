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
            $table->foreignId('bike_id')->index()->constrained()->cascadeOnUpdate();
            $table->foreignId('user_id')->index()->constrained()->cascadeOnUpdate();
            $table->date('rental_start_datetime');
            $table->date('rental_end_datetime');
            $table->date('rental_closed_datetime')->nullable();
            $table->boolean('status')->default(true);
            $table->string('description', 255)->nullable();
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
        Schema::dropIfExists('rentals');
    }
};
