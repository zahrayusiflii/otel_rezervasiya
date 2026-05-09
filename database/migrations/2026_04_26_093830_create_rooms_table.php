public function up()
{
    Schema::create('rooms', function (Blueprint $table) {
        $table->id(); // Avtomatik artan ID (1, 2, 3...)
        $table->string('room_no')->unique(); // Otaq nömrəsi təkrar ola bilməz
        $table->string('type'); // Növü (məs: Standart)
        $table->decimal('price', 10, 2); // Qiymət (məs: 55.50)
        $table->boolean('status')->default(0); // 0 = Boş, 1 = Dolu
        $table->timestamps(); // Yaranma və yenilənmə vaxtı
    });
}