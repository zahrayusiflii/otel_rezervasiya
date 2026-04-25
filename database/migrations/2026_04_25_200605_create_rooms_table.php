<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->unique(); // Otaq nömrəsi
            $table->string('room_type');             // Standart, VIP, Suite
            $table->decimal('price', 8, 2);          // Qiymət
            $table->boolean('is_available')->default(true); // Boşdur?
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};