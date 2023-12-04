<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/subject.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    @extends('layout.mainLayout')
    @section('title', 'subject')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-9 custom-col">
                <div class="card" style="width: 100%; height: 800px;">
                    <div class="card-body">
                        <video src="/videos/video1.mp4" class="object-fit-contain" controls></video>
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="card-subtitle mb-2 text-body-secondary">Bangun Datar</h2>
                            <button type="button" class="btn btn-outline" style="color: #088395;">Latihan Soal</button>
                        </div>
                        <p class="card-text">Dalam materi ini kamu akan mempelajari dasar pengetahuan mengenai
                            Marketing dan analisa unsur yang mempengaruhinya. Kamu akan mempelajari mengenai
                            dasar-dasar Marketing Mix dan cara memulai marketing sehingga dapat membantu kamu dalam
                            melakukan eksekusi marketing yang dapat menghasilkan keuntungan. Kemudian kamu akan
                            mempelajari unsur-unsur yang mempengaruhi Marketing dan analisa SWOT sehingga kamu dapat
                            meningkatkan efektivitas pemasaran Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-3 custom-col-right">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h4>Materi</h4>
                        <p><a class="link-with-image" href="#"><img src="/image/buttonplay.png"
                                    alt=""> Pengenalan Bangun Ruang</a></p>
                        <p><a class="link-with-image" href="#"><img src="/image/buttonplay.png"
                                    alt=""> Kubus dan Balok</a></p>
                        <p><a class="link-with-image" href="#"><img src="/image/buttonplay.png"
                                    alt=""> Piramida</a></p>
                        <p><a class="link-with-image" href="#"><img src="/image/buttonplay.png"
                                    alt=""> Limas dan Prisma</a></p>
                        <p><a class="link-with-image" href="#"><img src="/image/buttonplay.png"
                                    alt=""> Bola, Tabung, dan Kerucut</a></p>
                        <p><a class="link-with-image" href="#"><img src="/image/buttonplay.png"
                                    alt=""> Piramida</a></p>
                    </div>
                </div>
                <div class="card" style="width: 100%; margin-top: 170px; height: 335px;">
                    <div class="card-body">
                        <h4>Pelajaran Lainnya</h4>
                        <div class="link-with-image">
                            <img src="/image/polabilangan.jpeg" alt="">
                            <div class="text-container">
                                <p class="link-text" style="font-weight: bold;">
                                    <a href="#" style="text-decoration: none; color: black;">Pola Bilangan</a>
                                </p>
                                <p class="link-text2">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="link-with-image">
                            <img src="/image/polabilangan.jpeg" alt="">
                            <div class="text-container">
                                <p class="link-text" style="font-weight: bold;">
                                    <a href="#" style="text-decoration: none; color: black;">Pola Bilangan</a>
                                </p>
                                <p class="link-text2">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="link-with-image">
                            <img src="/image/polabilangan.jpeg" alt="">
                            <div class="text-container">
                                <p class="link-text" style="font-weight: bold;">
                                    <a href="#" style="text-decoration: none; color: black;">Pola Bilangan</a>
                                </p>
                                <p class="link-text2">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="link-with-image">
                            <img src="/image/polabilangan.jpeg" alt="">
                            <div class="text-container">
                                <p class="link-text" style="font-weight: bold;">
                                    <a href="#" style="text-decoration: none; color: black;">Pola Bilangan</a>
                                </p>
                                <p class="link-text2">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
