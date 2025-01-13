@extends('layouts.app')
<style>
    /* Section Styling */
    .room-section {
        padding: 20px;
        background-color: #FFFFFF;
        color: #fff;
        text-align: center;
        font-family: 'Arial', sans-serif;
    }

    .title {
        font-size: 30px;
        margin-bottom: 20px;
        text-align: left;
        color: #07617D;
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
    }

    .filter-btn.active {
        background-color: #F9A828;
        color: #000;
    }

    .filter-btn:hover {
        background-color: #ffd580;
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
        background-color: #f9f9f0;
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px;
        color: #000;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .room-image {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
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

    .room-address {
        font-size: 14px;
        color: #555;
        margin-bottom: 10px;
    }

    .room-details {
        list-style: none;
        padding: 0;
        margin: 0 0 10px 0;
        font-size: 14px;
        color: #555;
    }

    .room-details li {
        margin-bottom: 5px;
    }

    .room-price {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .room-book-btn {
        padding: 10px 15px;
        background-color: #00695c;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .room-book-btn:hover {
        background-color: #004d40;
    }
</style>
@section('content')
<div class="room-section">
    <h2 class="title">Our Hits Room's</h2>

    <!-- Filter Buttons -->
    <div class="filter-buttons">
        <button class="filter-btn active">All</button>
        <button class="filter-btn">VIP</button>
        <button class="filter-btn">Reguler</button>
    </div>

    <!-- Room Cards -->
    <div class="room-cards">
        @foreach ($rooms as $room)
            <div class="room-card">
                <img src="{{ asset('image/' . $room->gambarKamar) }}" alt="Room Image" class="room-image">
                <div class="room-info">
                    <h3 class="room-title">{{ $room->namaKamar }}</h3>
                    <ul class="room-details">
                        <li>{{ $room->jmlhKasur }} Kasur</li>
                        <li>{{ $room->ac }} AC</li>
                        <li>{{ $room->jmlhKamarMandi }} Kamar Mandi</li>
                    </ul>
                    <p class="room-price">Rp{{ number_format($room->hargaKamar, 2) }} / Night</p>
                    <button class="room-book-btn">BOOK</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection