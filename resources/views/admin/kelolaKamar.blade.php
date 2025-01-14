@extends('layouts.sidebar')

@section('content')
<div class="container mt-4">
    <h1>Kelola Kamar</h1>

    <!-- Tambah Kamar -->
    <div class="card mb-4">
        <div class="card-header">Tambah Kamar</div>
        <div class="card-body">
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="roomName" class="form-label">Nama Kamar</label>
                    <input type="text" class="form-control" id="roomName" name="namaKamar" required>
                </div>
                <div class="mb-3">
                    <label for="roomPrice" class="form-label">Harga per Malam</label>
                    <input type="number" class="form-control" id="roomPrice" name="hargaKamar" required>
                </div>
                <div class="mb-3">
                    <label for="roomBeds" class="form-label">Jumlah Kasur</label>
                    <input type="number" class="form-control" id="roomBeds" name="jmlhKasur" required>
                </div>
                <div class="mb-3">
                    <label for="roomBathrooms" class="form-label">Jumlah Kamar Mandi</label>
                    <input type="number" class="form-control" id="roomBathrooms" name="jmlhKamarMandi" required>
                </div>
                <div class="mb-3">
                    <label for="roomAC" class="form-label">AC</label>
                    <select class="form-select" id="roomAC" name="ac" required>
                        <option value="1">Ada</option>
                        <option value="0">Tidak Ada</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="roomCapacity" class="form-label">Kapasitas Kamar</label>
                    <input type="number" class="form-control" id="roomCapacity" name="kapasitasKamar" required>
                </div>
                <div class="mb-3">
                    <label for="roomStatus" class="form-label">Status Kamar</label>
                    <select class="form-select" id="roomStatus" name="statusKamar" required>
                        <option value="Available">Tersedia</option>
                        <option value="Booked">Terisi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="roomImage" class="form-label">Gambar Kamar</label>
                    <input type="file" class="form-control" id="roomImage" name="gambarKamar">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>


</div>
</div>
<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById("menu-toggle").onclick = function() {
        document.getElementById("sidebar-wrapper").classList.toggle("toggled");
    };
</script>
</body>
@endsection