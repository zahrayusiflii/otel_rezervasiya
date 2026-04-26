<!DOCTYPE html>
<html>
<head>
    <title>Otel Sistemi</title>
    <style>
        .status-daire {
    height: 12px;
    width: 12px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 8px;
}

.dolu { background-color: #e74c3c; }   /* Qırmızı */
.bos { background-color: #2ecc71; }    /* Yaşıl */
.rezerv { background-color: #f1c40f; } /* Sarı */
        .stat-konteyner {
    display: flex;
    gap: 20px;
    margin-bottom: 25px;
}
.stat-kart {
    flex: 1;
    padding: 15px;
    border-radius: 10px;
    color: white;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}
.mavi { background-color: #3498db; }
.yasil { background-color: #2ecc71; }
.sari { background-color: #f1c40f; color: #333; }
        body { font-family: sans-serif; margin: 40px; }
        .forma-qutusu { border: 2px solid #ccc; padding: 15px; margin-bottom: 20px; width: 350px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        .sil-duymesi { background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 4px; }
    </style>
</head>
<body>

    <h1>🏨 Otel Rezervasiyası</h1>
<div class="stat-konteyner">
    <div class="stat-kart mavi">
        <h4>Ümumi Otaqlar</h4>
        <h2>{{ $totalRooms ?? 0 }}</h2>
    </div>
    <div class="stat-kart yasil">
        <h4>Boş Otaqlar</h4>
        <h2>{{ $emptyRooms ?? 0 }}</h2>
    </div>
    <div class="stat-kart sari">
        <h4>Bugünkü Girişlər</h4>
        <h2>{{ $todayArrivals ?? 0 }}</h2>
    </div>
</div>
    <div class="forma-qutusu">
        <h3>Yeni Otaq Əlavə Et</h3>
        <form action="{{ route('rooms.store') }}" method="POST">
            @csrf
            <p>Otaq №: <input type="text" name="room_number" required></p>
            <p>Növü: <input type="text" name="room_type" required></p>
            <p>Qiymət: <input type="number" name="price" required></p>
            <button type="submit" style="background-color: green; color: white; padding: 10px;">Yadda saxla</button>
        </form>
    </div>

    <h3>Mövcud Otaqlar</h3>
    <table>
        <thead>
            <tr>
                <th>Otaq №</th>
                <th>Növü</th>
                <th>Qiymət</th>
                <th>Əməliyyat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>
                @if($room->status == 'dolu')
                    <span class="status-daire dolu"></span>
                @elseif($room->status == 'bos')
                    <span class="status-daire bos"></span>
                @else
                    <span class="status-daire rezerv"></span>
                @endif

                {{ $room->room_number }}
            </td>
            <td>{{ $room->room_type }}</td>
            <td>{{ $room->price }} AZN</td>
            <td>
                <button class="sil-duymesi">Sil</button>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>