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
            $table->foreignId('rentals_id')->index()->constrained()->cascadeOnUpdate();
            $table->integer('days');
            $table->integer('penalty_days')->default(0);
            $table->float('amount');
            $table->float('penalty_amount')->default(0);
            $table->float('total')->index();
            $table->smallInteger('payment_status')->default(1);
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
