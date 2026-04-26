<!DOCTYPE html>
<html>
<head>
    <title>Otel Rezervasiyası</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Mövcud Otaqlar</h1>
    <table>
        <thead>
            <tr>
                <th>Otaq №</th>
                <th>Növü</th>
                <th>Qiymət</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->room_type }}</td>
                <td>{{ $room->price }} AZN</td>
                <td>{{ $room->is_available ? 'Boşdur' : 'Doludur' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>