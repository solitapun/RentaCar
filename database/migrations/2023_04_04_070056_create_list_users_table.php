<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ListUser', function (Blueprint $table) {
            $table->id();
            $table->String('booking_id')->unique();
            $table->String('name');
            $table->String('email');
            $table->String('phone');
            $table->String('address');
            $table->String('destination');
            $table->integer('passenger');
            $table->date('from');
            $table->date('to');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_users');
    }
};
