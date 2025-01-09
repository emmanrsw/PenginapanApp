@extends('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="hero bg-info text-white text-center py-5">
    <div class="container">
        <h1 class="display-3 font-weight-bold">Selamat Datang di Homestay Kami</h1>
        <p class="lead mb-4">Tempat yang nyaman dan ramah, ideal untuk liburan atau perjalanan bisnis Anda. Nikmati kenyamanan yang tak terlupakan!</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Pesan Sekarang</a>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonials py-5">
    <div class="container">
        <h2 class="text-center mb-4">Apa Kata Tamu Kami?</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block text-center">
                        <p class="lead">"Tempat yang sangat nyaman, layanan ramah, dan lokasi yang strategis. Saya pasti akan kembali lagi!"</p>
                        <p>- Alex, Pengunjung</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block text-center">
                        <p class="lead">"Kamar yang bersih dan fasilitas lengkap, membuat saya merasa seperti di rumah sendiri!"</p>
                        <p>- Jessica, Pengunjung</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block text-center">
                        <p class="lead">"Layanan luar biasa! Tim yang sangat membantu dan membuat pengalaman menginap jadi lebih menyenangkan."</p>
                        <p>- Ryan, Pengunjung</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Rekomendasi untuk Anda Section -->
<section class="recommendations py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4">Rekomendasi untuk Anda</h2>
        <p class="lead mb-4">Kami menyediakan berbagai pilihan paket dan layanan untuk membuat perjalanan Anda lebih menyenangkan. Cek beberapa rekomendasi kami!</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Paket Wisata">
                    <div class="card-body">
                        <h5 class="card-title">Paket Wisata Lokal</h5>
                        <p class="card-text">Jelajahi tempat-tempat wisata menarik di sekitar kami dengan paket wisata yang sudah termasuk transportasi dan pemandu.</p>
                        <a href="#" class="btn btn-info">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Penyewaan Kendaraan">
                    <div class="card-body">
                        <h5 class="card-title">Penyewaan Kendaraan</h5>
                        <p class="card-text">Nikmati kebebasan berkendara dengan menyewa mobil atau sepeda dari homestay kami untuk perjalanan yang lebih fleksibel.</p>
                        <a href="#" class="btn btn-info">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Layanan Makanan">
                    <div class="card-body">
                        <h5 class="card-title">Layanan Makanan</h5>
                        <p class="card-text">Nikmati hidangan lezat yang kami tawarkan, termasuk pilihan sarapan dan makan malam di ruang makan kami atau di kamar Anda.</p>
                        <a href="#" class="btn btn-info">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action (CTA) Section -->
<section class="cta text-white text-center py-5" style="background-color: #6c757d;">
    <div class="container">
        <h2 class="mb-4">Pesan Kamar Sekarang!</h2>
        <p class="lead mb-4">Segera amankan kamar Anda dan nikmati kenyamanan terbaik di Homestay Kami. Kami siap menyambut Anda!</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Pesan Sekarang</a>
    </div>
</section>

@endsection
