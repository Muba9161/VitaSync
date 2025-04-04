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
        Schema::table('users', function (Blueprint $table) {
            $table->text('bio')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('portfolio_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('banner_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'bio',
                'phone_number',
                'city',
                'country',
                'date_of_birth',
                'portfolio_link',
                'linkedin_link',
                'instagram_link',
                'facebook_link',
                'twitter_link',
                'profile_picture',
                'banner_image',
            ]);
        });
    }
};
