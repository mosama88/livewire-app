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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('progress')->nullable();
            $table->timestamps();
        });

        DB::table('skills')->insert([
            [
                'name' => 'Fair',
                'progress' => '50',
            ],
        ]);

        DB::table('skills')->insert([
            [
                'name' => 'Good',
                'progress' => '60',
            ],
        ]);


        DB::table('skills')->insert([
            [
                'name' => 'Very Good',
                'progress' => '70',
            ],
        ]);

        DB::table('skills')->insert([
            [
                'name' => 'Very Good Plus',
                'progress' => '80',
            ],
        ]);

        DB::table('skills')->insert([
            [
                'name' => 'Excellent',
                'progress' => '90',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};