<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('address',400);
            $table->string('phone',40);
            $table->string('email',50)->unique();
            $table->string('facebook',100)->unique();
            $table->string('twitter',100)->unique();
            $table->string('linkedin',100)->unique();
            $table->string('instgram',100)->unique();            
            $table->timestamps();
        });

        DB::table('settings')->insert([
            [
                'name' => 'DGital',
                'address' => '320 W 5th Ave # 422',
                'phone' => '(907) 277-4505',
                'email' => 'info@dgital.com',
                'facebook' => 'https://www.facebook.com/dgital',
                'twitter' => 'https://www.twitter.com/dgital',
                'linkedin' => 'https://www.linkedin.com/dgital',
                'instgram' => 'https://www.instgram.com/dgital',
            ],
        ]);

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};