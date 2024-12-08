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
        Schema::create('services', function (Blueprint $table) {
                 $table->id();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
        DB::table('services')->insert([
            ['id' => 2, 'name' => 'Years Experience', 'icon' => Experience, 'description' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => 3, 'name' => "Team Members", 'icon' => Experience, 'description' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => 4, 'name' => "Satisfied Clients", 'icon' => 4000, 'description' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => 5, 'name' => "Compleate Projects", 'icon' => 5000, 'description' => null, 'created_at' => null, 'updated_at' => null],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
