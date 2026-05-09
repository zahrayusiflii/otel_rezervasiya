public function up(): void
{
    Schema::create('rooms', function (Blueprint $table) {
        $table->id();
        $table->string('room_number'); // Otaq №
        $table->string('room_type');   // Növü
        $table->decimal('price', 10, 2); // Qiymət
        $table->boolean('is_occupied')->default(false); // Boş və ya dolu
        $table->timestamps();
    });
}