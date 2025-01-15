@extends('layouts.app')

<style>
    /* Section Styling */
    .room-section {
        padding: 30px;
        background-color: #FFFFFF;
        text-align: center;
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .title {
        font-size: 30px;
        margin-bottom: 20px;
        text-align: center;
        color: #07617D;
    }

    /* Room Cards Grid */
    .room-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        padding: 10px;
        justify-content: center;
    }

    /* Room Card */
    .room-card {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .room-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .room-image {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
    }

    .room-info {
        padding: 15px;
        text-align: left;
    }

    .room-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .room-status {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .room-status .badge {
        padding: 5px 10px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: normal;
    }

    .room-status .badge.bg-success {
        background-color: #28a745;
        color: white;
    }

    /* Room Details Styling */
    .room-details {
        margin-top: 10px;
        font-size: 14px;
        color: #555;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 5px;
    }

    .room-details div {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .room-details svg {
        color: #007BFF;
    }

    .room-update {
        font-size: 12px;
        color: #777;
        margin-top: 10px;
    }

    .room-book-btn {
        width: 100%;
        text-align: center;
        background-color: #007BFF;
        color: white;
        padding: 10px 0;
        border: none;
        border-radius: 5px;
        margin-top: 15px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .room-book-btn:hover {
        background-color: #0056b3;
    }

    .room-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .room-header .room-title {
        font-size: 18px;
        font-weight: bold;
        margin: 0;
        color: #333;
        flex: 1;
    }

    .room-header .room-status {
        margin-left: 10px;
    }

    /* Room Footer */
    .room-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 15px;
    }

    .room-footer .room-book-btn {
        font-size: 12px;
        padding: 5px 15px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .room-footer .room-book-btn:hover {
        background-color: #0056b3;
    }

    .room-footer .room-update {
        font-size: 12px;
        color: #777;
        margin: 0;
        text-align: right;
    }

    /* Filter Buttons */
    .filter-buttons {
        margin-bottom: 20px;
    }

    .filter-btn {
        padding: 10px 20px;
        margin: 0 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        background-color: #f1f1f1;
        color: #333;
        transition: background-color 0.3s;
    }

    .filter-btn.active {
        background-color: #F9A828;
        color: #000;
    }

    .filter-btn:hover {
        background-color: #ffd580;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .room-section {
            padding: 20px;
        }

        .title {
            font-size: 24px;
        }

        .room-details {
            grid-template-columns: 1fr;
        }
    }
</style>

@section('content')
<div class="room-section">
    <h2 class="title">Our Homestay Rooms</h2>

    <!-- Date Selection Form -->
    <form action="{{ route('rooms.available') }}" method="GET">
        <label for="check_in_date">Tanggal Check-In:</label>
        <input type="date" id="check_in_date" name="check_in_date" required>

        <label for="check_in_time">Jam Check-In:</label>
        <input type="time" id="check_in_time" name="check_in_time" required>

        <label for="check_out_date">Tanggal Check-Out:</label>
        <input type="date" id="check_out_date" name="check_out_date" required>

        <label for="check_out_time">Jam Check-Out:</label>
        <input type="time" id="check_out_time" name="check_out_time" required>

        <button type="submit">Cari</button>
    </form>


    <!-- Room Cards -->
    <div class="room-cards">
        @forelse ($rooms as $room)
        <div class="room-card">
            <img src="{{ asset('images/kamar/' . $room->gambarKamar) }}" alt="Room Image" class="room-image">
            <div class="room-info">
                <div class="room-header">
                    <h3 class="room-title">{{ $room->namaKamar }}</h3>
                    <div class="room-status">
                        @if ($room->statusKamar == 'Tersedia')
                        <span class="badge bg-success">Tersedia</span>
                        @elseif ($room->statusKamar == 'Terisi')
                        <span class="badge bg-secondary">Sedang Terisi</span>
                        @else
                        <span class="badge bg-secondary">Sedang Perbaikan</span>
                        @endif
                    </div>
                </div>
                <div class="room-details">
                    <div>🛏️ {{ $room->jmlhKasur }} Kasur</div>
                    <div>❄️ {{ $room->ac }} AC</div>
                    <div>🚿 {{ $room->jmlhKamarMandi }} Kamar Mandi</div>
                    <div>👥 {{ $room->kapasitasKamar }} Orang</div>
                </div>
                <div class="room-footer">
                    <button class="room-book-btn">Pesan</button>
                    <div class="room-update">terakhir update:
                        {{ \Carbon\Carbon::parse($room->updated_at)->format('d/m/Y') }}
                    </div>
                </div>
            </div>
        </div>
        @empty
        <p>No rooms available for the selected date.</p>
        @endforelse
    </div>
</div>
@endsection