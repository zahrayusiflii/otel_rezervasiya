<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otel Rezervasiyası</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card-custom { border-radius: 10px; border: none; color: white; padding: 30px; }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Otel Rezervasiyası</h2>

    <!-- Statistika Kartları -->
    <div class="row text-center mb-5">
        <div class="col-md-4">
            <div class="card card-custom bg-primary shadow-sm">
                <h5>Ümumi Otaqlar</h5>
                <h2>{{ $totalRooms ?? 0 }}</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom bg-success shadow-sm">
                <h5>Boş Otaqlar</h5>
                <h2>0</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom bg-warning shadow-sm text-dark">
                <h5>Bugünkü Girişlər</h5>
                <h2>0</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sol tərəf: Form -->
        <div class="col-md-4">
            <div class="card p-4 shadow-sm border-0">
                <h5 class="mb-4">Yeni Otaq Əlavə Et</h5>
                <form action="{{ route('rooms.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Otaq №:</label>
                        <input type="text" name="room_no" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Növü:</label>
                        <input type="text" name="type" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-bold">Qiymət:</label>
                        <input type="number" name="price" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100 py-2">Yadda saxla</button>
                </form>
            </div>
        </div>

        <!-- Sağ tərəf: Cədvəl -->
        <div class="col-md-8">
            <h5 class="mb-3">Mövcud Otaqlar</h5>
            <div class="card shadow-sm border-0">
                <table class="table table-hover m-0">
                    <thead class="table-light">
                        <tr>
                            <th class="p-3">Otaq №</th>
                            <th class="p-3">Növü</th>
                            <th class="p-3">Qiymət</th>
                            <th class="p-3 text-center">Əməliyyat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rooms as $room)
                        <tr>
                            <td class="p-3">{{ $room->room_no }}</td>
                            <td class="p-3">{{ $room->type }}</td>
                            <td class="p-3">{{ $room->price }} AZN</td>
                            <td class="p-3 text-center">
                                <button class="btn btn-sm btn-outline-danger">Sil</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center p-4 text-muted">Hələlik heç bir otaq qeyd edilməyib.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>