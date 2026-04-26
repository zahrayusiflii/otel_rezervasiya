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
       Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number'); // Otaq nömrəsi
            $table->string('room_type');   // Otaq növü (Lüks, Standart)
            $table->decimal('price', 8, 2); // Qiymət
            $table->boolean('is_available')->default(true); // Boşdur ya yox
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
