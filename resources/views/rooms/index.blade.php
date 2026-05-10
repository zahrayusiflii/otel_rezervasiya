<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otel Sistemi</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f6f7fb;
            --surface: #ffffff;
            --surface-strong: #f2f4f8;
            --text: #1f2937;
            --border: #d9dee7;
            --shadow: 0 10px 24px rgba(15, 23, 42, 0.08);
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --danger: #dc2626;
        }

        html.dark {
            color-scheme: dark;
            --bg: #0f172a;
            --surface: #172033;
            --surface-strong: #22304a;
            --text: #e5edf7;
            --border: #334155;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
            --primary: #60a5fa;
            --primary-hover: #3b82f6;
            --danger: #ef4444;
        }

        @media (prefers-color-scheme: dark) {
            html:not(.light) {
                color-scheme: dark;
                --bg: #0f172a;
                --surface: #172033;
                --surface-strong: #22304a;
                --text: #e5edf7;
                --border: #334155;
                --shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
                --primary: #60a5fa;
                --primary-hover: #3b82f6;
                --danger: #ef4444;
            }
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: sans-serif;
            margin: 40px;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .sehife-basligi {
            align-items: center;
            display: flex;
            gap: 16px;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .tema-duymesi {
            background-color: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
            box-shadow: var(--shadow);
            color: var(--text);
            cursor: pointer;
            padding: 10px 14px;
        }

        .tema-duymesi:hover {
            background-color: var(--surface-strong);
        }

        .status-daire {
            height: 12px;
            width: 12px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
        }

        .dolu { background-color: #e74c3c; }
        .bos { background-color: #2ecc71; }
        .rezerv { background-color: #f1c40f; }

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
            box-shadow: var(--shadow);
        }

        .mavi { background-color: #3498db; }
        .yasil { background-color: #2ecc71; }
        .sari { background-color: #f1c40f; color: #333; }

        .forma-qutusu {
            background-color: var(--surface);
            border: 2px solid var(--border);
            border-radius: 8px;
            box-shadow: var(--shadow);
            margin-bottom: 20px;
            padding: 15px;
            width: 350px;
        }

        input {
            background-color: var(--surface);
            border: 1px solid var(--border);
            border-radius: 6px;
            color: var(--text);
            padding: 7px 9px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid var(--border);
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: var(--surface-strong);
            color: var(--text);
        }

        tbody tr {
            background-color: var(--surface);
        }

        tbody tr:nth-child(even) {
            background-color: var(--surface-strong);
        }

        .yadda-saxla-duymesi {
            background-color: var(--primary);
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            padding: 10px;
        }

        .yadda-saxla-duymesi:hover {
            background-color: var(--primary-hover);
        }

        .sil-duymesi {
            background-color: var(--danger);
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            padding: 5px 10px;
        }

        @media (max-width: 700px) {
            body {
                margin: 20px;
            }

            .sehife-basligi,
            .stat-konteyner {
                align-items: stretch;
                flex-direction: column;
            }

            .forma-qutusu {
                box-sizing: border-box;
                width: 100%;
            }
        }
    </style>
    <script>
        const savedTheme = localStorage.getItem('theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.add('light');
        }
    </script>
</head>
<body>
    <div class="sehife-basligi">
        <h1>🏨 Otel Rezervasiyası</h1>
        <button type="button" class="tema-duymesi" id="temaDuymesi">Dark mode</button>
    </div>

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
            <button type="submit" class="yadda-saxla-duymesi">Yadda saxla</button>
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

    <script>
        const themeButton = document.getElementById('temaDuymesi');

        function updateThemeButton() {
            const isDark = document.documentElement.classList.contains('dark');
            themeButton.textContent = isDark ? 'Light mode' : 'Dark mode';
        }

        themeButton.addEventListener('click', () => {
            const isDark = document.documentElement.classList.toggle('dark');
            document.documentElement.classList.toggle('light', !isDark);
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateThemeButton();
        });

        updateThemeButton();
    </script>
</body>
</html>
