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

        // Hitung durasi layanan
        $durasi_layanan = $this->hitungDurasiLayanan($request->kategori_layanan);

        // Cek layanan apakah kosong 
        if (!$durasi_layanan) {
            return redirect()->back()->withInput()->withErrors(['kategori_layanan' => 'Kategori layanan tidak valid.']);
        }

        // Cek data pasien terakhir di tanggal tsb
        $tanggal_periksa = $request->input('tanggal_periksa');
        $antrian_terakhir = Antrian::whereDate('tanggal_periksa', $tanggal_periksa)->latest()->first();

        // Waktu mulai dari durasi layanan pasien terakhir
        $waktu_mulai = $antrian_terakhir ? Carbon::parse($antrian_terakhir->waktu)->addMinutes($antrian_terakhir->durasi_layanan) : Carbon::createFromTime(8, 0);
        $waktu_mulai = Carbon::parse($waktu_mulai);

        // Jika tidak ada pasien pd tgl tsb, mulai dari jam 8 pagi
        if ($antrian_terakhir && $antrian_terakhir->tanggal_periksa != $tanggal_periksa) {
            $waktu_mulai = Carbon::createFromTime(8, 0);
        }

        $data = [
            'nama' => $request->input('nama'),
            'no_telepon' => $request->input('no_telepon'),
            'alamat' => $request->input("alamat"),
            'usia' => $request->input("usia"),
            'jenis_kelamin' => $request->input("jenis_kelamin"),
            'tanggal_periksa' => $tanggal_periksa,
            'gigi_sakit' => $request->input("gigi_sakit"),
            'gigi_berdarah' => $request->input("gigi_berdarah"),
            'kategori_layanan' => $request->input("kategori_layanan"),
            'durasi_layanan' => $durasi_layanan,
            'waktu' => $waktu_mulai,
            'nomor' => $antrian_terakhir ? $antrian_terakhir->nomor + 1 : 1,
        ];

        // Antrian::create($data);
        // return redirect()->to('dashboard-admin/antrian')->with('success', 'Data berhasil ditambahkan!');

        Antrian::create($data);
        if (Auth::check()) {
            if (Auth::user()->Authorize === "Admin") {
                # Jika yang melakukan tambah janji adalah admin arahkan ke..
                return redirect()->to('dashboard-admin/antrian')->with('success', 'Data berhasil ditambahkan!');
            } else {
                # Jika yang melakukan tambah janji adalah user (sisi pasien) arahkan ke..
                return redirect()->to('/dashboardpasien')->with('data', $data)->with('success', 'Pendaftaran berhasil!');
            }
        } else {
            # Jika tidak ada yang terautentikasi, redirect ke halaman login
            return redirect()->route('login');
        }
    }

    // Fungsi hitung durasi layanan berdasarkan kategori layanan
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

        return $durasi_layanan[$kategori_layanan];
    }

    public function edit($id)
    {
        $antrian = Antrian::findOrFail($id);
        return view('admin.crudantrian.editantrian', compact('antrian'));
    }

    public function update(Request $request, $id)
    {
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

        $antrian = Antrian::findOrFail($id);

        $antrian->nama = $request->nama;
        $antrian->no_telepon = $request->no_telepon;
        $antrian->alamat = $request->alamat;
        $antrian->usia = $request->usia;
        $antrian->jenis_kelamin = $request->jenis_kelamin;
        $antrian->tanggal_periksa = $request->tanggal_periksa;
        $antrian->gigi_sakit = $request->gigi_sakit;
        $antrian->gigi_berdarah = $request->gigi_berdarah;
        $antrian->kategori_layanan = $request->kategori_layanan;
        $antrian->save();

        return redirect()->route('admin.antrian')->with('success', 'Data berhasil diperbarui!');
    }
    
    public function destroy($id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->delete();
        return redirect()->route('admin.antrian')->with('success', 'Data berhasil dihapus!');
    }
}
