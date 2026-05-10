<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otel Rezervasiyası</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    margin: 0;
    padding-left: 250px;
    background: #f8f9fa;
}
.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 250px;
    height: 100vh;
    background: linear-gradient(180deg, #111827, #0b1220);
    padding: 24px 18px;
    color: white;
}

.sidebar-brand {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 30px;
}

.sidebar-logo {
    width: 42px;
    height: 42px;
    background: #516de8;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar-title {
    font-weight: bold;
    font-size: 16px;
}

.sidebar-link {
    display: block;
    color: #dbe4f0;
    text-decoration: none;
    padding: 15px 16px;
    border-radius: 8px;
    margin-bottom: 8px;
    font-size: 14px;
}

.sidebar-link.active {
    background: #5d7bea;
    color: white;
}

.sidebar-link:hover {
    background: rgba(255,255,255,0.08);
    color: white;
}

.dark-box {
    position: absolute;
    bottom: 35px;
    left: 18px;
    right: 18px;
    background: rgba(255,255,255,0.06);
    padding: 15px;
    border-radius: 8px;
    display: flex;
    justify-content: space-between;
    font-size: 13px;
}

    body {
    margin: 0;
    padding-left: 250px;
    transition: padding-left 0.3s ease;
}

.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 250px;
    height: 100vh;
    background: linear-gradient(180deg, #111827, #0b1220);
    padding: 24px 18px;
    color: white;
    transition: width 0.3s ease;
    overflow: hidden;
}

.sidebar.closed {
    width: 80px;
}

body.sidebar-closed {
    padding-left: 80px;
}

.sidebar.closed .sidebar-title,
.sidebar.closed .sidebar-link span,
.sidebar.closed .dark-box span,
.sidebar.closed .dark-box input {
    display: none;
}

.sidebar-toggle {
    position: fixed;
    top: 18px;
    left: 260px;
    z-index: 9999;
    border: none;
    background: #5d7bea;
    color: white;
    width: 38px;
    height: 38px;
    border-radius: 8px;
    cursor: pointer;
    transition: left 0.3s ease;
}

body.sidebar-closed .sidebar-toggle {
    left: 90px;
}

    .card-custom {
        border-radius: 10px;
        border: none;
        color: white;
        padding: 30px;
    }

    .status-daire {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 8px;
    }

    .status-bos {
        background-color: #2ecc71;
    }

    .status-dolu {
        background-color: #e74c3c;
    }

    .status-rezerv {
        background-color: #f1c40f;
    }
    .user-box {
    position: absolute;
    top: 20px;
    right: 40px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.user-box img {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    object-fit: cover;
}

.user-select {
    border: none;
    background: transparent;
    font-weight: 700;
    outline: none;
}

.user-role {
    font-size: 13px;
    color: #6c757d;
}
.room-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    margin-bottom: 40px;
}

.room-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
}

.room-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.room-info {
    padding: 20px;
}

.room-info h4 {
    margin-bottom: 10px;
    font-weight: 700;
}

.room-info p {
    color: #5f6b7a;
    font-size: 14px;
    line-height: 1.6;
}

.room-info span {
    display: inline-block;
    margin-top: 8px;
    font-weight: 700;
    color: #5d7bea;
}

@media (max-width: 768px) {
    .room-grid {
        grid-template-columns: 1fr;
    }
}
.main-content {
    margin-left: 280px;
    padding: 40px;
}

.reports-section {
    display: block;
}


.reports-section h2 {
    font-size: 32px;
    margin-bottom: 25px;
    color: #111827;
}

.report-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
}

.report-card {
    background: white;
    border-radius: 18px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border: 1px solid #e5e7eb;
}

.report-card h3 {
    font-size: 18px;
    margin-bottom: 15px;
    color: #374151;
}

.report-card strong {
    display: block;
    font-size: 34px;
    margin-bottom: 10px;
    color: #4f46e5;
}

.report-card p {
    color: #6b7280;
    font-size: 15px;
}

.dark-mode .reports-section h2 {
    color: white;
}

.dark-mode .report-card {
    background: #1f2937;
    border-color: #374151;
}

.dark-mode .report-card h3 {
    color: #e5e7eb;
}

.dark-mode .report-card p {
    color: #cbd5e1;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(12px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
</head>
<body>
<button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>

<aside class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <div class="sidebar-logo">🏨</div>
        <div class="sidebar-title">
            Otel<br>
            Rezervasiyası
        </div>
    </div>

    <a href="#" class="sidebar-link active">▦ <span>Dashboard</span></a>
    <a href="#rooms" class="sidebar-link">▣ <span>Otaqlar</span></a>
    <a href="#reservations" class="sidebar-link">▤ <span>Rezervasiyalar</span></a>
    <a href="#reportsSection" class="sidebar-link">⌁<span>Hesabatlar</span></a>
    <a href="#customersSection" class="sidebar-link">♙ <span>Müştərilər</span></a>
    <a href="#" class="sidebar-link">⚙ <span>Parametrlər</span></a>
    <a href="#" class="sidebar-link">⇱ <span>Çıxış</span></a>

    

</aside>
<div class="container mt-5">
    <div class="user-box">
        <img id="userImage" src="{{ asset('images/fidan.png') }}" alt="User">
        <div>
            <select id="userSelect" class="user-select" onchange="changeUser()">
                <option value="fidan">Fidan Dadaşzadə</option>
                <option value="zehra">Zəhra Yusifli</option>
            </select>
            <div class="user-role">Admin</div>
        </div>
    </div>
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
                <h2>{{ $emptyRooms ?? 0}}</h2>

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
        <!-- Yeni Otaq Əlavə Et -->
<div class="card p-4 shadow-sm border-0 mb-5">
    <h5 class="mb-4">Yeni Otaq Əlavə Et</h5>

    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label small fw-bold">Otaq №:</label>
                <input type="text" name="room_number" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
    <label class="form-label small fw-bold">Növü:</label>
    <select name="room_type" id="roomType" class="form-control" required onchange="setRoomPrice()">
        <option value="">Seçin</option>
        <option value="Standart Room" data-price="50">Standart Room</option>
        <option value="VIP Room" data-price="120">VIP Room</option>
        <option value="Family Room" data-price="90">Family Room</option>
        <option value="Deluxe Room" data-price="100">Deluxe Room</option>
    </select>
</div>

<div class="col-md-3 mb-3">
    <label class="form-label small fw-bold">Qiymət:</label>
    <input type="number" name="price" id="roomPrice" class="form-control" readonly required>
</div>


            <div class="col-md-3 mb-3">
                <label class="form-label small fw-bold">Status:</label>
                <select name="status" class="form-control" required>
                    <option value="bos">Boş</option>
                    <option value="dolu">Dolu</option>
                    <option value="rezerv">Rezerv olunub</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-success px-5 py-2">
            Yadda saxla
        </button>
    </form>
</div>

<!-- Mövcud Otaqlar -->
<h5 id="rooms" class="mb-3">Mövcud Otaqlar</h5>
<form action="{{ route('rooms.index') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="Axtarış edin..."
            value="{{ request('search') }}"
        >

        <button class="btn btn-primary" type="submit">Axtar</button>
    </div>
</form>

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
                <td class="p-3">
                    <span class="status-daire status-{{ $room->status }}"></span>
                    {{ $room->room_number }}
                </td>
                <td class="p-3">{{ $room->room_type }}</td>
                <td class="p-3">{{ $room->price }} AZN</td>
                <td class="p-3 text-center">
                    <form action="{{ route('rooms.destroy', $room) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Bu otaq silinsin?')">
                            Sil
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center p-4 text-muted">
                    Hələlik heç bir otaq qeyd edilməyib.
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>
</div>

    </div>
</form>
<div class="room-grid">
    <div class="room-card">
        <img src="{{ asset('images/standard-room.jpg') }}" alt="Standart room">
        <div class="room-info">
            <h4>Standart Room</h4>
            <p>
                Standart otaqlar 1 nəfərlik və 2 nəfərlik olur.
                1 nəfərlik otaqda bir ədəd tək çarpayı yerləşir.
                2 nəfərlik otaqda isə iki ayrı tək nəfərlik çarpayı olur.
            </p>
            <span>Qiymət: 50 AZN / gecə</span>
        </div>
    </div>

    <div class="room-card">
        <img src="{{ asset('images/vip-room.jpg') }}" alt="VIP room">
        <div class="room-info">
            <h4>VIP Room</h4>
            <p>
                VIP otaqlar daha geniş və rahat olur. Otaqda böyük iki nəfərlik
                çarpayı, televizor, kondisioner, mini bar və xüsusi istirahət sahəsi olur.
            </p>
            <span>Qiymət: 120 AZN / gecə</span>
        </div>
    </div>

    <div class="room-card">
        <img src="{{ asset('images/family-room.jpg') }}" alt="Family room">
        <div class="room-info">
            <h4>Family Room</h4>
            <p>
                Family otaqlar ailələr üçün nəzərdə tutulub. Otaqda bir böyük
                iki nəfərlik çarpayı və əlavə tək nəfərlik çarpayılar ola bilər.
            </p>
            <span>Qiymət: 90 AZN / gecə</span>
        </div>
    </div>

    <div class="room-card">
        <img src="{{ asset('images/deluxe-room.jpg') }}" alt="Deluxe room">
        <div class="room-info">
            <h4>Deluxe Room</h4>
            <p>
                Deluxe otaqlar komfortlu və müasir dizayna malikdir. Otaqda geniş
                çarpayı, şəxsi hamam otağı, iş masası və rahat oturma sahəsi olur.
            </p>
            <span>Qiymət: 100 AZN / gecə</span>
        </div>
    </div>
</div>

        </div>
    </div>
</div>
<h5 id="reservations" class="mb-3 mt-5">Rezervasiyalar</h5>

<div class="card shadow-sm border-0 mb-5">
    <table class="table table-hover m-0">
        <thead class="table-light">
            <tr>
                <th class="p-3">Otaq №</th>
                <th class="p-3">Növü</th>
                <th class="p-3">Qiymət</th>
                <th class="p-3">Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse($rooms->where('status', 'rezerv') as $room)
            <tr>
                <td class="p-3">
                    <span class="status-daire status-rezerv"></span>
                    {{ $room->room_number }}
                </td>
                <td class="p-3">{{ $room->room_type }}</td>
                <td class="p-3">{{ $room->price }} AZN</td>
                <td class="p-3">
                    <span class="badge bg-warning text-dark">Rezerv olunub</span>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center p-4 text-muted">
                    Hələlik rezerv olunmuş otaq yoxdur.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
<section id="reportsSection" class="reports-section mt-5">
        <h2 class="mb-4">Hesabatlar</h2>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card shadow-sm border-0 p-4">
                    <h5>Ümumi Otaqlar</h5>
                    <h2>{{ $rooms->count() }}</h2>
                    <p class="text-muted mb-0">Bütün otaqlar</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 p-4">
                    <h5>Boş Otaqlar</h5>
                    <h2>{{ $rooms->where('status', 'bos')->count() }}</h2>
                    <p class="text-muted mb-0">Hazırda boş otaqlar</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 p-4">
                    <h5>Dolu Otaqlar</h5>
                    <h2>{{ $rooms->where('status', 'dolu')->count() }}</h2>
                    <p class="text-muted mb-0">Tutulmuş otaqlar</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 p-4">
                    <h5>Rezervlər</h5>
                    <h2>{{ $rooms->where('status', 'rezerv')->count() }}</h2>
                    <p class="text-muted mb-0">Rezerv olunmuş otaqlar</p>
                </div>
            </div>
            <div class="col-md-3">
    <div class="card shadow-sm border-0 p-4">
        <h5>Gündəlik Gəlir</h5>
        <h2>{{ $rooms->where('status', 'dolu')->sum('price') }} AZN</h2>
        <p class="text-muted mb-0">Bu gün üçün gəlir</p>
    </div>
</div>

        </div>
    </section>
    </div>
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">Müştərilər</h2>
        <p class="text-muted mb-0">Oteldə qalan və rezerv edən müştərilər</p>
    </div>

    <button class="btn btn-success" onclick="showCustomerForm()">+ Yeni Müştəri</button>
</div>
<div id="customerForm" class="card shadow-sm border-0 p-4 mb-4" style="display: none;">
    <h5 class="mb-3">Yeni Müştəri Əlavə Et</h5>

    <div class="row g-3">
        <div class="col-md-4">
            <input type="text" id="customerName" class="form-control" placeholder="Ad Soyad">
        </div>

        <div class="col-md-4">
            <input type="text" id="customerPhone" class="form-control" placeholder="Telefon">
        </div>

        <div class="col-md-4">
            <input type="email" id="customerEmail" class="form-control" placeholder="Email">
        </div>

        <div class="col-md-3">
            <input type="text" id="customerRoom" class="form-control" placeholder="Otaq">
        </div>

        <div class="col-md-3">
            <input type="date" id="customerCheckIn" class="form-control">
        </div>

        <div class="col-md-3">
            <input type="date" id="customerCheckOut" class="form-control">
        </div>

        <div class="col-md-3">
            <select id="customerStatus" class="form-select">
                <option value="Aktiv">Aktiv</option>
                <option value="Rezerv">Rezerv</option>
                <option value="Çıxıb">Çıxıb</option>
            </select>
        </div>

        <div class="col-md-4">
            <input type="number" id="customerPayment" class="form-control" placeholder="Ödəniş">
        </div>
        <div class="col-md-4">
    <div class="col-md-12">
    <label class="form-label">Otaq növü</label>

    <div class="d-flex gap-4 flex-wrap">
        <div class="form-check">
            <input class="form-check-input room-type-check" type="checkbox"
                   id="standardRoom" value="Standard Room" data-price="50"
                   onclick="selectCustomerRoom(this)">
            <label class="form-check-label" for="standardRoom">
                Standard Room
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input room-type-check" type="checkbox"
                   id="vipRoom" value="VIP Room" data-price="120"
                   onclick="selectCustomerRoom(this)">
            <label class="form-check-label" for="vipRoom">
                VIP Room
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input room-type-check" type="checkbox"
                   id="deluxeRoom" value="Deluxe Room" data-price="90"
                   onclick="selectCustomerRoom(this)">
            <label class="form-check-label" for="deluxeRoom">
                Deluxe Room
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input room-type-check" type="checkbox"
                   id="familyRoom" value="Family Room" data-price="100"
                   onclick="selectCustomerRoom(this)">
            <label class="form-check-label" for="familyRoom">
                Family Room
            </label>
        </div>
    </div>
</div>

</div>

        <div class="col-md-12">
            <button class="btn btn-primary" onclick="addCustomer()">Əlavə et</button>
        </div>
    </div>
</div>

    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-4">
                <h6 class="text-muted">Ümumi Müştəri</h6>
                <h2 id="totalCustomers">0</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-4">
                <h6 class="text-muted">Aktiv Qalanlar</h6>
                <h2 id="activeCustomers">0</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-4">
                <h6 class="text-muted">Bugünkü Giriş</h6>
                <h2 id="todayCustomers">0</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-4">
                <h6 class="text-muted">VIP Müştəri</h6>
                <h2 id="vipCustomers">0</h2>
            </div>
        </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-hover align-middle mb-0">

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>Müştəri</th>
                        <th>Telefon</th>
                        <th>Otaq</th>
                        <th>Giriş</th>
                        <th>Çıxış</th>
                        <th>Status</th>
                        <th>Ödəniş</th>
                    </tr>
                </thead>
                <tbody id="customerTableBody">

                    <tr>
                        <td>
                            <strong>Dadaşzadə Sabir</strong><br>
                            <small class="text-muted">sabir@mail.com</small>
                        </td>
                        <td>+994 50 123 45 67</td>
                        <td>204</td>
                        <td>10.05.2026</td>
                        <td>13.05.2026</td>
                        <td><span class="badge bg-success">Aktiv</span></td>
                        <td>120 AZN</td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Hacıyeva Xədicə</strong><br>
                            <small class="text-muted">xadi@mail.com</small>
                        </td>
                        <td>+994 55 222 33 44</td>
                        <td>108</td>
                        <td>09.05.2026</td>
                        <td>11.05.2026</td>
                        <td><span class="badge bg-warning text-dark">Rezerv</span></td>
                        <td>50AZN</td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Nigar Həsənli</strong><br>
                            <small class="text-muted">nigar@mail.com</small>
                        </td>
                        <td>+994 70 777 88 99</td>
                        <td>301</td>
                        <td>07.05.2026</td>
                        <td>10.05.2026</td>
                        <td><span class="badge bg-secondary">Çıxıb</span></td>
                        <td>100AZN</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    function changeUser() {
        const select = document.getElementById('userSelect');
        const image = document.getElementById('userImage');

        if (select.value === 'fidan') {
            image.src = "{{ asset('images/fidan.png') }}";
        } else {
            image.src = "{{ asset('images/zehra.png') }}";
        }
    }
</script>
<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('closed');
        document.body.classList.toggle('sidebar-closed');
    }
</script>
 <script>
    function setRoomPrice() {
        const roomType = document.getElementById('roomType');
        const roomPrice = document.getElementById('roomPrice');
        const selectedOption = roomType.options[roomType.selectedIndex];

        roomPrice.value = selectedOption.getAttribute('data-price') || '';
    }
</script>
<script>
    function showReports() {
        document.getElementById('reportsSection').style.display = 'block';
    }
</script>
<script>
    function goToReports(event) {
        event.preventDefault();

        document.getElementById('reportsSection').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
</script>
<script>
    let customers = JSON.parse(localStorage.getItem('customers')) || [];

    function showCustomerForm() {
        const form = document.getElementById('customerForm');

        if (form.style.display === 'none') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }
    }

    function formatDate(dateValue) {
        const date = new Date(dateValue);
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();

        return `${day}.${month}.${year}`;
    }

    function getBadgeClass(status) {
        if (status === 'Rezerv') {
            return 'bg-warning text-dark';
        }

        if (status === 'Çıxıb') {
            return 'bg-secondary';
        }

        return 'bg-success';
    }

    function renderCustomers() {
        const tableBody = document.getElementById('customerTableBody');

        tableBody.innerHTML = '';

        customers.forEach(customer => {
            tableBody.innerHTML += `
                <tr data-vip="${customer.isVip}">
                    <td>
                        <strong>${customer.name}</strong><br>
                        <small class="text-muted">${customer.email}</small>
                    </td>
                    <td>${customer.phone}</td>
                    <td>${customer.room}</td>
                    <td>${customer.checkIn}</td>
                    <td>${customer.checkOut}</td>
                    <td><span class="badge ${getBadgeClass(customer.status)}">${customer.status}</span></td>
                    <td>${customer.payment} AZN</td>
                </tr>
            `;
        });

        updateCustomerStats();
    }

    function updateCustomerStats() {
        const rows = document.querySelectorAll('#customerTableBody tr');

        let total = rows.length;
        let active = 0;
        let today = 0;
        let vip = 0;

        const now = new Date();
        const todayText = String(now.getDate()).padStart(2, '0') + '.' +
            String(now.getMonth() + 1).padStart(2, '0') + '.' +
            now.getFullYear();

        rows.forEach(row => {
            const status = row.querySelector('.badge')?.innerText.trim();
            const checkIn = row.children[3]?.innerText.trim();

            if (status === 'Aktiv') {
                active++;
            }

            if (checkIn === todayText) {
                today++;
            }

            if (row.dataset.vip === 'true') {
                vip++;
            }
        });

        document.getElementById('totalCustomers').innerText = total;
        document.getElementById('activeCustomers').innerText = active;
        document.getElementById('todayCustomers').innerText = today;
        document.getElementById('vipCustomers').innerText = vip;
    }
    function selectCustomerRoom(selectedCheckbox) {
    const roomChecks = document.querySelectorAll('.room-type-check');

    roomChecks.forEach(check => {
        if (check !== selectedCheckbox) {
            check.checked = false;
        }
    });

    if (selectedCheckbox.checked) {
        document.getElementById('customerRoom').value = selectedCheckbox.value;
        document.getElementById('customerPayment').value = selectedCheckbox.dataset.price;

    
    } else {
        document.getElementById('customerRoom').value = '';
        document.getElementById('customerPayment').value = '';
    }
}

    function addCustomer() {
        const name = document.getElementById('customerName').value;
        const phone = document.getElementById('customerPhone').value;
        const email = document.getElementById('customerEmail').value;
        const room = document.getElementById('customerRoom').value;
        const checkIn = document.getElementById('customerCheckIn').value;
        const checkOut = document.getElementById('customerCheckOut').value;
        const status = document.getElementById('customerStatus').value;
        const payment = document.getElementById('customerPayment').value;
        const isVip = document.getElementById('vipRoom').checked;


        if (!name || !phone || !room || !checkIn || !checkOut || !payment) {
            alert('Zəhmət olmasa bütün əsas xanaları doldurun.');
            return;
        }

        const newCustomer = {
            name: name,
            phone: phone,
            email: email,
            room: room,
            checkIn: formatDate(checkIn),
            checkOut: formatDate(checkOut),
            status: status,
            payment: payment,
            isVip: isVip
        };

        customers.push(newCustomer);
        localStorage.setItem('customers', JSON.stringify(customers));

        renderCustomers();

        document.getElementById('customerForm').style.display = 'none';

        document.getElementById('customerName').value = '';
        document.getElementById('customerPhone').value = '';
        document.getElementById('customerEmail').value = '';
        document.getElementById('customerRoom').value = '';
        document.getElementById('customerCheckIn').value = '';
        document.getElementById('customerCheckOut').value = '';
        document.getElementById('customerPayment').value = '';
        document.getElementById('customerVip').checked = false;
        document.querySelectorAll('.room-type-check').forEach(check => check.checked = false);

    }

    renderCustomers();
</script>


</body>
</html>