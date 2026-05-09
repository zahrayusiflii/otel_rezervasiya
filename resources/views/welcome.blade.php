<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otel Rezervasiyası</title>
    <!-- Bootstrap CDN (Dizaynı sürətləndirmək üçün) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: sans-serif; }
        .dashboard-card {
            border-radius: 10px;
            color: white;
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .bg-blue { background-color: #1e56a0; }
        .bg-green { background-color: #2d8e44; }
        .bg-yellow { background-color: #c9a01c; }
        
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
            max-width: 400px;
        }
        .btn-save { background-color: #2d8e44; color: white; border: none; padding: 5px 15px; }
        .table-header { background-color: #e9ecef; font-weight: bold; }
    </style>
</head>
<body>

<div class="container mt-4">
    <!-- Başlıq -->
    <h2 class="mb-4">🏨 Otel Rezervasiyası</h2>

    <!-- Üst Kartlar (Statistika) -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="dashboard-card bg-blue">
                <h5>Ümumi Otaqlar</h5>
                <h1>0</h1>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card bg-green">
                <h5>Boş Otaqlar</h5>
                <h1>0</h1>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card bg-yellow">
                <h5>Bugünkü Girişlər</h5>
                <h1>0</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Form Bölməsi -->
        <div class="col-md-5 mb-4">
            <div class="form-container">
                <h6 class="fw-bold mb-3">Yeni Otaq Əlavə Et</h6>
                <form>
                    <!-- Köhnə <form> sətirlərini bu kodla əvəz et -->
<form action="{{ route('rooms.store') }}" method="POST">
    @csrf <!-- Laravel üçün təhlükəsizlik tokeni -->
    
    <div class="mb-2 row">
        <label class="col-sm-4 col-form-label">Otaq №:</label>
        <div class="col-sm-8">
            <input type="text" name="room_no" class="form-control form-control-sm" required>
        </div>
    </div>
    
    <div class="mb-2 row">
        <label class="col-sm-4 col-form-label">Növü:</label>
        <div class="col-sm-8">
            <input type="text" name="type" class="form-control form-control-sm" required>
        </div>
    </div>
    
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">Qiymət:</label>
        <div class="col-sm-8">
            <input type="text" name="price" class="form-control form-control-sm" required>
        </div>
    </div>
    
    <button type="submit" class="btn btn-save btn-sm">Yadda saxla</button>
</form>
            </div>
        </div>
    </div>

    <!-- Cədvəl Bölməsi -->
    <div class="mt-2">
        <h6 class="fw-bold mb-2">Mövcud Otaqlar</h6>
        <table class="table table-bordered align-middle">
            <thead class="table-header">
                <tr>
                    <th>Otaq №</th>
                    <th>Növü</th>
                    <th>Qiymət</th>
                    <th>Əməliyyat</th>
                </tr>
            </thead>
            <tbody>
                <!-- Nümunə Sətir -->
                <tr>
                    <td>101</td>
                    <td>Lüks</td>
                    <td>500.00 AZN</td>
                    <td>
     <button class="btn btn-link btn-sm p-0 text-decoration-none">Redaktə</button>

                        <button class="btn btn-light btn-sm border ms-2">Sil</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>