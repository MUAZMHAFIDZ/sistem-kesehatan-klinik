<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Antrian;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminPasienController extends Controller
{
    public function buatAntrian(Request $request)
    {
        // Aturan validasi untuk data yang masuk
        $rules = [
            'kategori_layanan' => 'required|string',
            'tanggal_periksa' => 'required|date',
            'jenis_kelamin' => 'required_with:tanggal_periksa|nullable|in:laki-laki,perempuan',
            'gigi_sakit' => 'required_with:tanggal_periksa|nullable|in:ya,tidak',
            'gigi_berdarah' => 'required_with:tanggal_periksa|nullable|in:ya,tidak',
        ];

        // Jika tidak ada pengguna yang terautentikasi atau pengguna terautentikasi adalah admin
        if (!Auth::check() || (Auth::check() && Auth::user()->Authorize === "Admin")) {
            // Tambah aturan validasi untuk nama, no telepon, alamat, dan usia
            $rules = array_merge($rules, [
                'nama' => 'required|string|max:30',
                'no_telepon' => 'required|numeric',
                'alamat' => 'required|string|max:255',
                'usia' => 'required|numeric',
            ]);
        }

        // Validasi data yang masuk berdasarkan aturan variabel $rules
        $request->validate($rules);

        // Hitung durasi layanan berdasarkan kategori layanan yang dipilih
        $durasi_layanan = $this->hitungDurasiLayanan($request->kategori_layanan);
        if (!$durasi_layanan) {
            // Jika kategori layanan tidak valid, kembalikan dengan pesan error
            return redirect()->back()->withInput()->withErrors(['kategori_layanan' => 'Kategori layanan tidak valid.']);
        }

        // Ambil tanggal periksa dari input tanggal
        $tanggal_periksa = $request->input('tanggal_periksa');
        // Cari antrian terakhir pada tanggal tersebut
        $antrian_terakhir = Antrian::whereDate('tanggal_periksa', $tanggal_periksa)->latest()->first();

        // Tentukan waktu mulai berdasarkan pasien terakhir atau mulai dari jam 8 pagi
        $waktu_mulai = $antrian_terakhir ? Carbon::parse($antrian_terakhir->waktu)->addMinutes($antrian_terakhir->durasi_layanan) : Carbon::createFromTime(8, 0);
        if (!$antrian_terakhir || $antrian_terakhir->tanggal_periksa != $tanggal_periksa) {
            $waktu_mulai = Carbon::createFromTime(8, 0);
        }

        //menyiapkan data antrian
        $data = [
            'kategori_layanan' => $request->input('kategori_layanan'),
            'durasi_layanan' => $durasi_layanan,
            'waktu' => $waktu_mulai,
            'tanggal_periksa' => $tanggal_periksa,
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'gigi_sakit' => $request->input('gigi_sakit'),
            'gigi_berdarah' => $request->input('gigi_berdarah'),
            'nomor' => $antrian_terakhir ? $antrian_terakhir->nomor + 1 : 1,
        ];

        // Tentukan user_id dan nama berdasarkan kondisi pengguna terautentikasi
        if (Auth::check() && Auth::user()->Authorize !== "Admin") {
            // Jika pengguna terautentikasi bukan admin
            $data['user_id'] = Auth::user()->id;
            $data['nama'] = Auth::user()->fullname;
        } else {
            // Jika pengguna tidak terautentikasi atau admin
            $data['nama'] = $request->input('nama');
            $data['no_telepon'] = $request->input('no_telepon');
            $data['alamat'] = $request->input('alamat');
            $data['usia'] = $request->input('usia');
        }

        // Buat antrian baru dengan data yang sudah disiapkan
        Antrian::create($data);

        // Redirect berdasarkan peran pengguna
        if (Auth::check() && Auth::user()->Authorize === "Admin") {
            return redirect()->to('dashboard-admin/antrian')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->to('/dashboardpasien')->with('success', 'Pendaftaran berhasil!');
        }
    }

    // Fungsi untuk menghitung durasi layanan berdasarkan kategori layanan
    private function hitungDurasiLayanan($kategori_layanan)
    {
        $durasi_layanan = [
            "Pemeriksaan Gigi dan Mulut" => 45,
            "Scaling Gigi" => 60,
            "Penambalan Gigi" => 60,
            "Pencabutan Gigi" => 60,
            "Pemutihan Gigi" => 60,
            "Pemasangan Behel" => 90,
            "Pemasangan Crown Gigi" => 90,
            "Konsultasi Ortodonti" => 60,
            "Konsultasi Implan Gigi" => 60,
            "Operasi Gigi Bungsu" => 60,
            "Fluoridasi" => 30,
        ];

        // Kembalikan durasi layanan sesuai kategori atau null jika tidak ada
        return $durasi_layanan[$kategori_layanan] ?? null;
    }

    // Fungsi untuk mengedit antrian
    public function edit($id)
    {
        // Cari antrian berdasarkan id atau gagal jika tidak ditemukan
        $antrian = Antrian::findOrFail($id);
        // Tampilkan view dengan data antrian yang ditemukan
        return view('admin.crudantrian.editantrian', compact('antrian'));
    }

    // Fungsi untuk memperbarui antrian
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'no_telepon' => 'required|numeric',
            'alamat' => 'required',
            'usia' => 'required|numeric',
            'jenis_kelamin' => 'required_with:tanggal_periksa|nullable',
            'tanggal_periksa' => 'required',
            'gigi_sakit' => 'required_with:tanggal_periksa|nullable',
            'gigi_berdarah' => 'required_with:tanggal_periksa|nullable',
            'kategori_layanan' => 'required|string',
        ]);

        // Cari antrian berdasarkan id atau gagal jika tidak ditemukan
        $antrian = Antrian::findOrFail($id);

        // Perbarui data antrian dengan input yang baru
        $antrian->nama = $request->nama;
        $antrian->no_telepon = $request->no_telepon;
        $antrian->alamat = $request->alamat;
        $antrian->usia = $request->usia;
        $antrian->jenis_kelamin = $request->jenis_kelamin;
        $antrian->tanggal_periksa = $request->tanggal_periksa;
        $antrian->gigi_sakit = $request->gigi_sakit;
        $antrian->gigi_berdarah = $request->gigi_berdarah;
        $antrian->kategori_layanan = $request->kategori_layanan;
        
        // Simpan perubahan
        $antrian->save();

        // Redirect ke halaman antrian dengan pesan sukses
        return redirect()->route('admin.antrian')->with('success', 'Data berhasil diperbarui!');
    }

    // Fungsi untuk menghapus antrian
    public function destroy($id)
    {
        // Cari antrian berdasarkan id atau gagal jika tidak ditemukan
        $antrian = Antrian::findOrFail($id);
        // Hapus antrian
        $antrian->delete();
        // Redirect ke halaman antrian dengan pesan sukses
        return redirect()->route('admin.antrian')->with('success', 'Data berhasil dihapus!');
    }
}