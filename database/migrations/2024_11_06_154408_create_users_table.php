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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->enum('gender', ["M", "F", "O"])->nullable();
            $table->date('DOB');
            $table->integer('phone')->unique();
            $table->string('bio');
            $table->string('password');
            $table->string('profile_pic');
            $table->string('cover_img');
            $table->integer('total_posts')->default(0);
            $table->integer('total_communities')->default(0);
            $table->integer('suspend_account')->default(0);
            $table->unsignedBigInteger('community_id')->nullable();
            $table->foreign('community_id')->references('community_id')->on('communities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};