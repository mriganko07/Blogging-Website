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
        Schema::create('communities', function (Blueprint $table) {
            $table->id('community_id');
            $table->string('community_name');
            $table->string('community_description');
            $table->string('community_pic');
            $table->string('community_coverpic');
            $table->integer('community_total_member')->nullable();
            $table->integer('community_total_posts')->nullable();
            $table->enum('category', ["games", "technologies", "movies", "travel", "music", "education", "sport", "news_politics", "business_finance"]);
            $table->integer('community_suspend')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            // $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};
