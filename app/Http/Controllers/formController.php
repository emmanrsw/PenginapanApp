<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    // untuk menampilkan form pemesanan
    public function view (){
        return view('pesan');
    }
}
