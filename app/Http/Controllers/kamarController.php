<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class kamarController extends Controller
{
    // untuk menampilkan listkamar
    public function view (){
        // Ambil semua kamar dari database
        $rooms = Kamar::all();

        // Kirim data kamar ke view 'listkamar'
        return view('listKamar', compact('rooms'));
    }
}
