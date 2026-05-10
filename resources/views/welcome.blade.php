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
.dark-mode {
    background-color: #121212;
    color: white;
}

.dark-mode .forma-qutusu {
    background-color: #1e1e1e;
    border-color: #444;
}

.dark-mode table {
    background-color: #1e1e1e;
}

.dark-mode th {
    background-color: #2a2a2a;
    color: white;
}

.dark-mode td {
    border-color: #444;
}

.dark-mode input {
    background-color: white;
    color: #222;
    border: 1px solid #ddd;
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
    <a href="#" class="sidebar-link">⌁ <span>Hesabatlar</span></a>
    <a href="#" class="sidebar-link">♙ <span>Müştərilər</span></a>
    <a href="#" class="sidebar-link">⚙ <span>Parametrlər</span></a>
    <a href="#" class="sidebar-link">⇱ <span>Çıxış</span></a>

    <div class="dark-box">
    <span>☾ Dark mode</span>
    <input type="checkbox" id="darkModeCheckbox">
</div>

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
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme === 'dark') {
        document.body.classList.add('dark-mode');
    }

    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');

        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    }
</script>
<script>
    const checkbox = document.getElementById('darkModeCheckbox');

    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });
</script>

</body>
</html>