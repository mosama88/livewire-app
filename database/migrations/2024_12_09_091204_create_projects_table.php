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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('categories')->insert([
            [
                'name' => 'SEO Optimization',
                'created_at' => '2024-12-09 07:48:10',
                'updated_at' => '2024-12-09 07:48:10',
            ],
            [
                'name' => 'Web Design',
                'created_at' => '2024-12-09 07:48:17',
                'updated_at' => '2024-12-09 07:48:17',
            ],
            [
                'name' => 'Social Media Marketing',
                'created_at' => '2024-12-09 07:48:24',
                'updated_at' => '2024-12-09 07:48:24',
            ],
            [
                'name' => 'Email Marketing',
                'created_at' => '2024-12-09 07:48:31',
                'updated_at' => '2024-12-09 07:48:31',
            ],
            [
                'name' => 'PPC Advertising',
                'created_at' => '2024-12-09 07:48:38',
                'updated_at' => '2024-12-09 07:48:38',
            ],
            [
                'name' => 'App Development',
                'created_at' => '2024-12-09 07:48:43',
                'updated_at' => '2024-12-09 07:48:43',
            ],
        ]);
    


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
