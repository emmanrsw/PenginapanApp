@extends('layouts.app')
<style>
    /* Hero Section Styling */
    .hero {
        position: relative;
        text-align: center;
        color: white;
    }

    .hero img {
        width: 100%;
        height: 90%;
    }

    .hero .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.7);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .hero .overlay h1 {
        color: #07617D;
        font-size: 3em;
        margin: 0;
    }

    .hero .overlay p {
        color: #333;
        font-size: 1.2em;
        margin: 20px 0 0 0;
        max-width: 600px;
        text-align: center;
    }

    .hero .btn {
        background-color: #07617D;
        /* Accent: Merah bata */
        color: #FFFFFF;
        border: none;
        transition: background-color 0.3s ease;
    }

    .hero .btn:hover {
        background-color: #054D5F;
        /* Warna merah lebih gelap untuk hover */
    }

    /* Testimonials Section */
    .testimonials {
        background-color: #FFFFFF;
        /* Background putih */
        color: #212121;
        /* Font hitam pekat */
        text-align: center;
        padding: 40px 20px;
    }

    /* Recommendations Section */
    .recommendations {
        background-color: #FFFFFF;
        /* Secondary: Abu-abu terang */
        color: #212121;
        /* Font hitam pekat */
    }

    .recommendations .card {
        border: none;
        transition: transform 0.3s ease;
    }

    .recommendations .card:hover {
        transform: scale(1.05);
    }

    .recommendations .btn {
        background-color: #003366;
        /* Primary: Navy blue */
        color: #FFFFFF;
        border: none;
    }

    .recommendations .btn:hover {
        background-color: #002244;
        /* Navy lebih gelap untuk hover */
    }
</style>
@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <img alt="A scenic view of a resort with wooden walkways over water and traditional-style buildings"
            src="image/hero.jpg" />
        <div class="overlay">
            <h1 class="display-3 font-weight-bold">Selamat Datang di Homestay Kami</h1>
            <p class="lead mb-4">Tempat yang nyaman dan ramah, ideal untuk liburan atau perjalanan bisnis Anda. Nikmati
                kenyamanan yang tak terlupakan!</p>
            <a href="{{ route('pesan') }}" class="btn btn-light btn-lg">Pesan Sekarang</a>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonials">
        <div class="container">
            <h2 class="text-center mb-4">Apa Kata Tamu Kami?</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block text-center">
                            <p class="lead">"Tempat yang sangat nyaman, layanan ramah, dan lokasi yang strategis. Saya
                                pasti akan kembali lagi!"</p>
                            <p>- Alex, Pengunjung</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block text-center">
                            <p class="lead">"Kamar yang bersih dan fasilitas lengkap, membuat saya merasa seperti di
                                rumah sendiri!"</p>
                            <p>- Jessica, Pengunjung</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block text-center">
                            <p class="lead">"Layanan luar biasa! Tim yang sangat membantu dan membuat pengalaman
                                menginap jadi lebih menyenangkan."</p>
                            <p>- Ryan, Pengunjung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rekomendasi untuk Anda Section -->
    <section class="recommendations py-5">
        <div class="container text-center">
            <h2 class="mb-4">Rekomendasi untuk Anda</h2>
            <p class="lead mb-4">Kami menyediakan berbagai pilihan paket dan layanan untuk membuat perjalanan Anda lebih
                menyenangkan. Cek beberapa rekomendasi kami!</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Paket Wisata">
                        <div class="card-body">
                            <h5 class="card-title">Paket Wisata Lokal</h5>
                            <p class="card-text">Jelajahi tempat-tempat wisata menarik di sekitar kami dengan paket
                                wisata yang sudah termasuk transportasi dan pemandu.</p>
                            <a href="#" class="btn btn-info">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Penyewaan Kendaraan">
                        <div class="card-body">
                            <h5 class="card-title">Penyewaan Kendaraan</h5>
                            <p class="card-text">Nikmati kebebasan berkendara dengan menyewa mobil atau sepeda dari
                                homestay kami untuk perjalanan yang lebih fleksibel.</p>
                            <a href="#" class="btn btn-info">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Layanan Makanan">
                        <div class="card-body">
                            <h5 class="card-title">Layanan Makanan</h5>
                            <p class="card-text">Nikmati hidangan lezat yang kami tawarkan, termasuk pilihan sarapan dan
                                makan malam di ruang makan kami atau di kamar Anda.</p>
                            <a href="#" class="btn btn-info">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
