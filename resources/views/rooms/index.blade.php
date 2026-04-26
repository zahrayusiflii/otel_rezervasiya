<!DOCTYPE html>
<html>
<head>
    <title>Otel Sistemi</title>
    <style>
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
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->room_type }}</td>
                <td>{{ $room->price }} AZN</td>
                <td>
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="sil-duymesi">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>