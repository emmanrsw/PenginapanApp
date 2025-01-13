@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Form Pemesanan Homestay</h1>

    <form action="{{ route('pesan') }}" method="POST">
        @csrf

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="card-title">Nama Pemesan</h3>
                <input type="text" class="form-control" name="nama_pemesan" placeholder="Nama lengkap" required>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="card-title">Tanggal Booking</h3>
                <div class="form-group">
                    <label for="check_in">Tanggal Check-in</label>
                    <input type="date" class="form-control" id="check_in" name="check_in" required>
                </div>
                <div class="form-group">
                    <label for="check_out">Tanggal Check-out</label>
                    <input type="date" class="form-control" id="check_out" name="check_out" required>
                </div>
                <div class="form-group mt-3">
                    <label for="jumlah_hari">Jumlah Hari/Malam</label>
                    <input type="text" class="form-control" id="jumlah_hari" name="jumlah_hari" readonly>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="card-title">Pilihan Kamar</h3>
                <select class="form-control" name="tipe_kamar" required>
                    <option value="per_kamar">Per Kamar</option>
                    <option value="per_lantai">Per Lantai</option>
                    <option value="full">Full</option>
                </select>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="card-title">Jumlah Orang</h3>
                <input type="number" class="form-control" name="jumlah_orang" placeholder="Jumlah orang" required>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="card-title">Metode Pembayaran</h3>
                <select class="form-control" name="metode_bayar" required>
                    <option value="transfer">Transfer Bank</option>
                    <option value="cash">Cash</option>
                    <option value="ovo">OVO</option>
                    <option value="gopay">GoPay</option>
                </select>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="card-title">Nomor Telepon WA</h3>
                <input type="tel" class="form-control" name="no_telp" placeholder="Nomor telepon WhatsApp" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-4">Kirim Pemesanan</button>
    </form>
</div>

<script>
    // Script untuk menghitung jumlah hari/malam
    document.getElementById('check_in').addEventListener('change', hitungDurasi);
    document.getElementById('check_out').addEventListener('change', hitungDurasi);

    function hitungDurasi() {
        var checkIn = new Date(document.getElementById('check_in').value);
        var checkOut = new Date(document.getElementById('check_out').value);

        if (checkIn && checkOut) {
            var timeDiff = checkOut - checkIn;
            var days = timeDiff / (1000 * 3600 * 24); // Menghitung jumlah hari
            if (days > 0) {
                document.getElementById('jumlah_hari').value = days + ' Hari/Malam';
            } else {
                document.getElementById('jumlah_hari').value = 'Tanggal check-out harus setelah check-in';
            }
        }
    }
</script>
@endsection
