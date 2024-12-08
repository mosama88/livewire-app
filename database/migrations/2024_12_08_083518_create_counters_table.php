<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('count')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        });
        DB::table('counters')->insert([
            ['id' => 2, 'name' => 'Years Experience', 'count' => 8000, 'icon' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => 3, 'name' => "Team Members", 'count' => 3654, 'icon' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => 4, 'name' => "Satisfied Clients", 'count' => 4000, 'icon' => null, 'created_at' => null, 'updated_at' => null],
            ['id' => 5, 'name' => "Compleate Projects", 'count' => 5000, 'icon' => null, 'created_at' => null, 'updated_at' => null],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
