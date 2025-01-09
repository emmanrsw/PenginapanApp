<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan dashboard admin
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Menampilkan halaman kelola kamar
    public function rooms()
    {
        return view('admin.rooms');
    }

    // Menampilkan halaman pesanan
    public function orders()
    {
        return view('admin.orders');
    }

    // Menampilkan halaman ulasan
    public function reviews()
    {
        return view('admin.reviews');
    }
}
