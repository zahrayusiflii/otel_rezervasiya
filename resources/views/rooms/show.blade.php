<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Otaq Detalları</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }

        .detail-card {
            background: white;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .room-image {
            width: 100%;
            height: 360px;
            object-fit: cover;
        }

        .feature-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            padding: 0;
            list-style: none;
        }

        .feature-list li {
            background: #f1f5f9;
            padding: 12px 14px;
            border-radius: 8px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <a href="javascript:history.back()" class="btn btn-outline-primary mb-4">Geri qayıt</a>
    <div class="detail-card">
        <img src="{{ asset('images/' . $room['image']) }}" class="room-image">

        <div class="p-4">
            <h1>{{ $room['name'] }}</h1>
            <h4 class="text-primary mb-4">Qiymət: {{ $room['price'] }} AZN / gecə</h4>

            <p>
                Bu otaq rahat qalmaq üçün bütün əsas imkanlarla təmin olunub.
                Qonaqlar üçün təmiz yataq, rahat istirahət sahəsi, kondisioner,
                televizor və gündəlik xidmət mövcuddur.
            </p>

            <h3 class="mt-4 mb-3">Ən populyar xüsusiyyətlər</h3>

            @if($room['name'] == 'Standart Room')
    <ul class="feature-list">
        <li>📏 Sahə: 18-25 m² genişliyində rahat məkan.</li>
        <li>🛌 Yataq: Bir böyük iki nəfərlik və ya iki tək nəfərlik yataq.</li>
        <li>📶 Wi-Fi: Yüksək sürətli pulsuz internet bağlantısı.</li>
        <li>🚿 Vanna otağı: Duş kabini, dəsmal, fen və gigiyenik dəst.</li>
        <li>💻 İş sahəsi: Rahat yazı masası və stul.</li>
    </ul>
@elseif($room['name'] == 'VIP Room')
    <ul class="feature-list">
        <li>📏 Sahə: 35-45 m² geniş və komfortlu məkan.</li>
        <li>🛌 Yataq: Böyük premium ikinəfərlik yataq.</li>
        <li>🍷 Mini bar: İçkilər və qəlyanaltılar üçün mini bar.</li>
        <li>🛋️ İstirahət sahəsi: Divan və xüsusi oturma guşəsi.</li>
        <li>📺 TV: Böyük ekran televizor və əlavə rahatlıq imkanları.</li>
        <li>☕ Çay/qəhvə: Otaqda çay və qəhvə hazırlama imkanı.</li>
    </ul>
@elseif($room['name'] == 'Family Room')
    <ul class="feature-list">
        <li>📏 Sahə: 30-40 m² ailələr üçün geniş otaq.</li>
        <li>🛌 Yataq: Bir böyük yataq və əlavə tək nəfərlik yataqlar.</li>
        <li>👨‍👩‍👧 Ailə rahatlığı: Uşaqlar üçün uyğun geniş məkan.</li>
        <li>📶 Wi-Fi: Pulsuz internet bağlantısı.</li>
        <li>🚿 Vanna otağı: Duş, dəsmal, fen və gigiyenik dəst.</li>
        <li>🍳 Səhər yeməyi: Ailə üçün səhər yeməyi xidməti.</li>
    </ul>
@elseif($room['name'] == 'Deluxe Room')
    <ul class="feature-list">
        <li>📏 Sahə: 28-35 m² modern dizaynlı otaq.</li>
        <li>🛌 Yataq: Rahat və geniş ikinəfərlik yataq.</li>
        <li>🛁 Vanna otağı: Daha komfortlu şəxsi hamam otağı.</li>
        <li>💻 İş masası: İş və istirahət üçün rahat sahə.</li>
        <li>☕ Çay/qəhvə: Otaqda çay və qəhvə qurğusu.</li>
        <li>🍽️ Oda servisi: Yemək və içki sifarişi imkanı.</li>
    </ul>
@endif

        </div>
    </div>
</div>

</body>
</html>
