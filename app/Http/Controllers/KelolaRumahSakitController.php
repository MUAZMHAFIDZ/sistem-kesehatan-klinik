<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\JadwalDokter;
use App\Models\Obat;
use App\Models\Profil;

class KelolaRumahSakitController extends Controller
{


    //=======================================
    //              DOKTER
    //=======================================
    public function registerDokter(Request $request) {
        $validateData = $request->validate([
            'username' => 'required|string|min:4|max:255|unique:users',
            'fullname' => 'required|string|min:3|max:255',
            'password' => 'required|string|min:6|confirmed',
            'nohp' => 'required|numeric|min:10|unique:users',
            'image' => 'nullable|image|file',
        ]);

        $photonames = 'standar.png';
        if ($request->hasFile('image')) {
            $photonames = $validateData['username'] . "." . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('photoProfiles', $photonames);
        }

        $user = new User();
            $user->username = $validateData['username'];
            $user->fullname = $validateData['fullname'];
            $user->password = Hash::make($validateData['password']);
            $user->image = '/storage/photoProfiles/' . $photonames;
            $user->nohp = $validateData['nohp'];
            $user->Authorize = "Dokter";
            $user->save();

        if ($user) {
            return back();
        }
    }

    public function deleteDokter($id) {
        $user = User::findOrFail($id);
        if (Storage::exists('public/storage/photoProfiles/' . $user->username)) {
            Storage::delete('public/storage/photoProfiles/', $user->username);
        }
        $user->delete();
        return back();
    }

    public function editDokter(Request $request, $id) {

        $userss = User::find($id);
        if ($request->hasFile('image')) {
            $photonames = $userss->username . "." . $request->file('image')->getClientOriginalExtension();
            if (Storage::exists('public/storage/photoProfiles/' . $userss->username)) {
                Storage::delete('public/storage/photoProfiles/' . $userss->username);
            }
            $request->file('image')->storeAs('photoProfiles', $photonames);
            $photonames = '/storage/photoProfiles/' . $photonames;
            User::where('id', $id)->update([
                'image' => $photonames,
            ]);
        }

        if ($request->has('password') && strlen($request->input('password')) >= 6 && $request->input('password') == $request->input('password_confirmation')) {
            $password = Hash::make($request->input('password'));
            User::where('id', $id)->update([
                'password' => $password,
            ]);
        }

        if ($request->input('username') != $userss->username && strlen($request->input('username')) >= 3) {
            $namaLama = str_replace('/storage/photoProfiles/', '', $userss->image);
            $namaBaru = str_replace($userss->username, $request->input('username'), $namaLama);
            $fileLama = 'photoProfiles/' . $namaLama; //. $namaLama;
            $fileBaru = 'photoProfiles/' . $namaBaru; //$namaBaru;
            Storage::move($fileLama, $fileBaru);
            User::where('id', $id)->update([
                'username' => $request->input('username'),
                'image' => '/storage/photoProfiles/' . $namaBaru
            ]);
        }
        
        if ($request->input('fullname') != $userss->fullname && strlen($request->input('fullname')) >= 3) {
            User::where('id', $id)->update([
                'fullname' => $request->input('fullname'),
            ]);
        }
        
        if ($request->input('nohp') != $userss->nohp && strlen(strval($request->input('nohp'))) >= 10) {
            User::where('id', $id)->update([
                'nohp' => intval($request->input('nohp')),
            ]);
        }
        
        return back();
    }


    // ==============================================
    //              crud jadwal dokter
    // ==============================================
    public function editJadwalDokter(Request $request, $id) {
        $senin = $request->input('senin1') . "-" . $request->input('senin2');
        $selasa = $request->input('selasa1') . "-" . $request->input('selasa2');
        $rabu = $request->input('rabu1') . "-" . $request->input('rabu2');
        $kamis = $request->input('kamis1') . "-" . $request->input('kamis2');
        $jumat = $request->input('jumat1') . "-" . $request->input('jumat2');
        $sabtu = $request->input('sabtu1') . "-" . $request->input('sabtu2');
        $minggu = $request->input('minggu1') . "-" . $request->input('minggu2');

        $jadwal = JadwalDokter::find($id);

        if ($senin != $jadwal->senin) {
            JadwalDokter::where('id', $id)->update([ 'senin' => $senin, ]);
        }
        if ($selasa != $jadwal->selasa) {
            JadwalDokter::where('id', $id)->update([ 'selasa' => $selasa, ]);
        }
        if ($rabu != $jadwal->rabu) {
            JadwalDokter::where('id', $id)->update([ 'rabu' => $rabu, ]);
        }
        if ($kamis != $jadwal->kamis) {
            JadwalDokter::where('id', $id)->update([ 'kamis' => $kamis, ]);
        }
        if ($jumat != $jadwal->jumat) {
            JadwalDokter::where('id', $id)->update([ 'jumat' => $jumat, ]);
        }
        if ($sabtu != $jadwal->sabtu) {
            JadwalDokter::where('id', $id)->update([ 'sabtu' => $sabtu, ]);
        }
        if ($minggu != $jadwal->minggu) {
            JadwalDokter::where('id', $id)->update([ 'minggu' => $minggu, ]);
        }
        if ($request->input('status') != $jadwal->status) {
            Obat::where('id', $id)->update([ 'status' => intval($request->input('status')), ]);
        }
    }


    // =============================================
    //                  crud obat
    // =============================================
    public function tambahObat(Request $request) {
        $validateData = $request->validate([
            'nama_obat' => 'required|string|max:255|unique:obat',
            'jenis_obat' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
            'satuan' => 'required|string|max:255',
            'harga_satuan' => 'required|numeric',
            'tanggal_kadaluarsa' => 'required|date',
            'supplier' => 'required|string|max:255',
            'keterangan' => 'required|string|max:1000',
        ]);

        $obat = new Obat();
        $obat->nama_obat = $validateData['nama_obat'];
        $obat->jenis_obat = $validateData['jenis_obat'];
        $obat->jumlah = $validateData['jumlah'];
        $obat->satuan = $validateData['satuan'];
        $obat->harga_satuan = $validateData['harga_satuan'];
        $obat->tanggal_kadaluarsa = $validateData['tanggal_kadaluarsa'];
        $obat->supplier = $validateData['supplier'];
        $obat->keterangan = $validateData['keterangan'];
        $obat->save();

        if ($obat) {
            return back();
        }
    }
    public function deleteObat($id) {
        $obat = Obat::findOrFail($id);
        $obat->delete();
        return back();
    }
    public function editObat(Request $request, $id) {

        $obat = Obat::find($id);
        
        if ($request->input('nama_obat') != $obat->nama_obat && strlen($request->input('nama_obat')) >= 1) {
            Obat::where('id', $id)->update([ 'nama_obat' => $request->input('nama_obat'), ]);
        }
        if ($request->input('jenis_obat') != $obat->jenis_obat && strlen($request->input('jenis_obat')) >= 1) {
            Obat::where('id', $id)->update([ 'jenis_obat' => $request->input('jenis_obat'), ]);
        }
        if ($request->input('jumlah') != $obat->jumlah) {
            Obat::where('id', $id)->update([ 'jumlah' => intval($request->input('jumlah')), ]);
        }
        if ($request->input('satuan') != $obat->satuan) {
            Obat::where('id', $id)->update([ 'satuan' => intval($request->input('satuan')), ]);
        }
        if ($request->input('harga_satuan') != $obat->harga_satuan) {
            Obat::where('id', $id)->update([ 'harga_satuan' => intval($request->input('harga_satuan')), ]);
        }
        if ($request->input('tanggal_kadaluarsa') != $obat->tanggal_kadaluarsa) {
            Obat::where('id', $id)->update([ 'tanggal_kadaluarsa' => intval($request->input('tanggal_kadaluarsa')), ]);
        }
        if ($request->input('supplier') != $obat->supplier) {
            Obat::where('id', $id)->update([ 'supplier' => intval($request->input('supplier')), ]);
        }
        if ($request->input('keterangan') != $obat->keterangan) {
            Obat::where('id', $id)->update([ 'keterangan' => intval($request->input('keterangan')), ]);
        }
        
        return back();
    }

    // =============================================
    //              CRUD PROFIL ADMIN
    // =============================================
    public function updateProfilnya(Request $request, $id) {
        //Get ID yang arep diedit YGY!
        $userpro = User::findOrFail($id);
    
        //Simpan perubahan info user lah CUY!
        $userpro->update([
            'fullname' => $request->input('nama'),
            'nohp' => $request->input('telepon'),
        ]);
    
        //Cek profil terkait pengguna CUYY!!
        $profil = Profil::where('user_id', $id)->first();
    
        //Buat profil baru jika belum ada CUYY
        if (!$profil) {
            $profil = new Profil();
            $profil->user_id = $userpro->id;
        }
    
        //Simpan/perbarui info profil CuY
        $profil->deskripsi = $request->input('deskripsi');
        $profil->email = $request->input('email');
        // $profil->pengalaman = $request->input('pengalaman');
    // Periksa apakah pengalaman ada
    $pengalaman = $request->input('pengalaman');
    if (is_null($pengalaman)) {
        $profil->pengalaman = json_encode(['Tidak ada']);
    } else {
        $profil->pengalaman = json_encode($pengalaman);
    }
    // Periksa apakah pendidikan ada
    $pendidikan = $request->input('pendidikan');
    if (is_null($pendidikan)) {
        $profil->pendidikan = json_encode(['Tidak ada']);
    } else {
        $profil->pendidikan = json_encode($pendidikan);
    }

        $profil->alamat = $request->input('alamat');
        $profil->save();
    
        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}