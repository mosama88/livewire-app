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
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email',50)->unique();
            $table->timestamps();
        });

        DB::table('subscribers')->insert([
            ['id' => 1, 'email' => 'mesemeg648@rustetic.com', 'created_at' => null, 'updated_at' => null],
            ['id' => 2, 'email' => 'elenaromanenko7@ebarg.net', 'created_at' => null, 'updated_at' => null],
            ['id' => 3, 'email' => 'tanzov87@zmedia.store', 'created_at' => null, 'updated_at' => null],
            ['id' => 4, 'email' => 'ab59094891@hulas.me', 'created_at' => null, 'updated_at' => null],
            ['id' => 5, 'email' => 'tanzov87@auhit.com', 'created_at' => null, 'updated_at' => null],
            ['id' => 7, 'email' => 'tanzov87@4whole.com', 'created_at' => null, 'updated_at' => null],
            ['id' => 8, 'email' => 'tanzov87', 'created_at' => null, 'updated_at' => null],
            ['id' => 9, 'email' => 'Anom1957@dayrep.com', 'created_at' => null, 'updated_at' => null],
            ['id' => 12, 'email' => 'mejohng648@rustetic.com', 'created_at' => null, 'updated_at' => null],
            ['id' => 14, 'email' => 'yasming648@rustetic.com', 'created_at' => null, 'updated_at' => null],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribers');
    }
};
