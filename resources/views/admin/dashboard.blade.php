@extends('layouts.admin')

@section('content')
<!-- Admin Dashboard Section -->
<div class="container-fluid mt-4">
    <div class="row">
        <!-- Stats Overview -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Pesanan</h5>
                    <h2>150</h2>
                    <p class="text-muted">Pesanan yang diterima bulan ini</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Jumlah Kamar Tersedia</h5>
                    <h2>10</h2>
                    <p class="text-muted">Kamar yang masih tersedia</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Pengunjung Hari Ini</h5>
                    <h2>40</h2>
                    <p class="text-muted">Jumlah pengunjung yang datang hari ini</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Ulasan Positif</h5>
                    <h2>45</h2>
                    <p class="text-muted">Jumlah ulasan positif dari pengunjung</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5>Pesanan Terbaru</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pengunjung</th>
                                <th>Kamar</th>
                                <th>Tanggal Pesan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ali Rahman</td>
                                <td>Deluxe Room</td>
                                <td>2024-12-30</td>
                                <td><span class="badge bg-success">Confirmed</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jessica Tan</td>
                                <td>Standard Room</td>
                                <td>2024-12-29</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ryan Jauhari</td>
                                <td>Suite Room</td>
                                <td>2024-12-28</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('admin.orders') }}" class="btn btn-info mt-3">Lihat Semua Pesanan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Reviews -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5>Ulasan Terbaru</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Alex Johnson</strong> - "Tempat yang luar biasa! Sangat nyaman dan staf yang ramah."
                        </li>
                        <li class="list-group-item">
                            <strong>Jessica Tan</strong> - "Kamar bersih dan layanan cepat, saya pasti akan kembali lagi."
                        </li>
                        <li class="list-group-item">
                            <strong>Ryan Jauhari</strong> - "Harga terjangkau dan lokasi sangat strategis."
                        </li>
                    </ul>
                    <a href="{{ route('admin.reviews') }}" class="btn btn-info mt-3">Lihat Semua Ulasan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
