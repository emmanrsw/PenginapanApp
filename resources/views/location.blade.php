@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Lokasi Homestay</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <h3 class="card-title">Alamat</h3>
            <p class="card-text">Beji Homestay, Jl. Raya Pelangi No. 123, Desa Wisata, Kota Indah, Indonesia</p>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title">Peta Lokasi</h3>
            <!-- Embed Google Maps -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8962928976903!2d110.3690471103853!3d-7.800803277402191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5786a722f04b%3A0xd2b4ff823416174e!2sBeji%20Homestay!5e0!3m2!1sid!2sid!4v1736786518046!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
</div>
@endsection
