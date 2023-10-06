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
        Schema::create('user_credit_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_profile_id')->constrained();
            $table->string('phone_code', 5);
            $table->string('phone_number', 7);
            $table->char('card_number', 16);
            $table->char('expiration_date', 5);
            $table->boolean('main')->default(false);
            $table->enum('status', ['pending', 'inactive', 'active'])->default('pending');
            $table->string('detail')->nullable();
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
        Schema::dropIfExists('user_credit_cards');
    }
};
