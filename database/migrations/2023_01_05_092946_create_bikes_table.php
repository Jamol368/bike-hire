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
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bike_categories_id')->index()->constrained()->cascadeOnUpdate();
            $table->foreignId('shop_id')->index()->constrained()->cascadeOnUpdate();
            $table->string('name', 31)->index();
            $table->string('slug', 31)->unique()->index();
            $table->float('price');
            $table->float('penalty');
            $table->float('discount')->default(0);
            $table->smallInteger('status')->default(1);
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
        Schema::dropIfExists('bikes');
    }
};
