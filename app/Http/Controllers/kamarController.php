<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class kamarController extends Controller
{
    // Menampilkan daftar kamar
    public function index()
    {
        $rooms = Kamar::all();
        return view('admin.daftarKamar', compact('rooms'));
    }

    // Menampilkan form tambah kamar
    public function create()
    {
        return view('admin.kelolaKamar');
    }

    // Menyimpan data kamar baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'namaKamar' => 'required|string|max:255',
            'gambarKamar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jmlhKasur' => 'required|integer',
            'jmlhKamarMandi' => 'required|integer',
            'ac' => 'required|boolean',
            'hargaKamar' => 'required|numeric',
            'statusKamar' => 'required|string',
            'kapasitasKamar' => 'required|integer',
        ]);

        // Tangani unggahan gambar
        if ($request->hasFile('gambarKamar')) {
            $file = $request->file('gambarKamar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/kamar'), $filename);
        }

        // Simpan data ke database
        Kamar::create([
            'namaKamar' => $request->namaKamar,
            'gambarKamar' => $filename ?? null, // Gunakan nama file jika ada
            'jmlhKasur' => $request->jmlhKasur,
            'jmlhKamarMandi' => $request->jmlhKamarMandi,
            'ac' => $request->ac,
            'hargaKamar' => $request->hargaKamar,
            'statusKamar' => $request->statusKamar,
            'kapasitasKamar' => $request->kapasitasKamar,
        ]);

        // Redirect ke halaman daftar kamar dengan pesan sukses
        return redirect()->route('admin.daftarKamar')->with('success', 'Kamar berhasil ditambahkan.');
    }

    // Menghapus kamar
    public function destroy($idKamar)
    {
        $room = Kamar::findOrFail($idKamar);
        $room->delete();

        // Redirect ke halaman daftar kamar
        return redirect()->route('admin.daftarKamar')->with('success', 'Kamar berhasil dihapus.');
    }


// INI BELUM
    // Menampilkan form edit kamar
    public function edit($idKamar)
    {
        $room = Kamar::findOrFail($idKamar);
        return view('admin.editKamar', compact('room'));
    }

    // Memperbarui data kamar
    public function update(Request $request, $idKamar)
    {
        // Validasi input
        $request->validate([
            'namaKamar' => 'required|string|max:255',
            'hargaKamar' => 'required|numeric',
            'statusKamar' => 'required|string',
        ]);

        // Update data kamar
        $room = Kamar::findOrFail($idKamar);
        $room->update($request->all());

        // Redirect ke halaman daftar kamar
        return redirect()->route('rooms')->with('success', 'Kamar berhasil diperbarui.');
    }
}
