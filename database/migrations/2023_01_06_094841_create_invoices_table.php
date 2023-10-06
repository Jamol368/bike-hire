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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_id')->index()->constrained()->cascadeOnUpdate();
            $table->integer('hours');
            $table->integer('penalty_hours')->default(0);
            $table->float('amount');
            $table->float('penalty_amount')->default(0);
            $table->float('total')->index();
            $table->boolean('payment_status')->default(true);
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
        Schema::dropIfExists('invoices');
    }
};
