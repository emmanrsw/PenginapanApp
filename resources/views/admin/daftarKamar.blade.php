@extends('layouts.sidebar')

@section('content')
<div class="container mt-4">
    <h1>Daftar Kamar</h1>

    <!-- Tombol Tambah Kamar -->
    <a href="{{ route('kelolaKamar') }}" class="btn btn-success mb-3">Tambah Kamar</a>

    <!-- Daftar Kamar -->
    <div class="card">
        <div class="card-header">Daftar Kamar</div>
        <div class="card-body">
            @if($rooms->isEmpty())
                <p>Belum ada kamar yang ditambahkan.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kamar</th>
                            <th>Harga per Malam</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $index => $room)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $room->namaKamar }}</td>
                            <td>{{ number_format($room->hargaKamar, 0, ',', '.') }} IDR</td>
                            <td>{{ $room->statusKamar }}</td>
                            <td>
                                <!-- Tombol Edit -->
                                <a href="{{ route('rooms.edit', $room->idKamar) }}" class="btn btn-warning btn-sm">Edit</a>
                                <!-- Tombol Hapus -->
                                <form action="{{ route('rooms.destroy', $room->idKamar) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus kamar ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

@endsection
