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
        Schema::create('join', function (Blueprint $table) {
            $table->id("join_id");
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('community_id')->nullable();
            $table->unique(['user_id', 'community_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join');
    }
};
