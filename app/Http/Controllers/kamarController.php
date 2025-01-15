<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class kamarController extends Controller
{
    //=============================== ADMIN ===============================
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


    // INI BELUM (udah lala benerin, cek ya)
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
            'jmlhKasur' => 'required|integer',
            'jmlhKamarMandi' => 'required|integer',
            'ac' => 'required|boolean',
            'statusKamar' => 'required|string',
            'kapasitasKamar' => 'required|integer',
            'gambarKamar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data kamar yang akan diperbarui
        $room = Kamar::findOrFail($idKamar);

        // Tangani unggahan gambar baru jika ada
        if ($request->hasFile('gambarKamar')) {
            $file = $request->file('gambarKamar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/kamar'), $filename);

            // Hapus gambar lama jika ada
            if ($room->gambarKamar && file_exists(public_path('images/kamar/' . $room->gambarKamar))) {
                unlink(public_path('images/kamar/' . $room->gambarKamar));
            }

            $room->gambarKamar = $filename;
        }

        // Perbarui data lainnya
        $room->update([
            'namaKamar' => $request->namaKamar,
            'hargaKamar' => $request->hargaKamar,
            'jmlhKasur' => $request->jmlhKasur,
            'jmlhKamarMandi' => $request->jmlhKamarMandi,
            'ac' => $request->ac,
            'statusKamar' => $request->statusKamar,
            'kapasitasKamar' => $request->kapasitasKamar,
        ]);

        // Redirect ke halaman daftar kamar
        return redirect()->route('admin.daftarKamar')->with('success', 'Kamar berhasil diperbarui.');
    }

    // // Memperbarui data kamar
    // public function update(Request $request, $idKamar)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'namaKamar' => 'required|string|max:255',
    //         'hargaKamar' => 'required|numeric',
    //         'statusKamar' => 'required|string',
    //     ]);

    //     // Update data kamar
    //     $room = Kamar::findOrFail($idKamar);
    //     $room->update($request->all());

    //     // Redirect ke halaman daftar kamar
    //     return redirect()->route('rooms')->with('success', 'Kamar berhasil diperbarui.');
    // }

    // =============================== USER ===============================
    public function view (){
        // Ambil semua kamar dari database
        $rooms = Kamar::all();

        // Kirim data kamar ke view 'listkamar'
        return view('listKamar', compact('rooms'));
    }
}
