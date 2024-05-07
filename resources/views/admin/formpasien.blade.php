<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/formpasien.css') }}">
</head>
<body>
    
    <div id="topbar">    
        <h3 class="judul">Klinik Dental Care : Formulir Pendaftaran</h3>
        <p>Tambahkan data pendaftaran pasien baru</p>
    </div>

<div class="container mt-5">
  <form action="{{route('admin.formpasien.submit')}}" id="registrationForm" method="POST" onsubmit="return validateForm()" class="container-form registration-form">
    @csrf
    <div class="sub-container">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
      <span class="error-message" id="nama-error"></span>
    </div>
    <div class="form-group">
      <label for="noTelepon">No Telepon</label>
      <input type="tel" class="form-control" id="no_telepon" name="no_telepon" placeholder="Masukkan no telepon">
      <span class="error-message" id="no-telepon-error"></span>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
      <span class="error-message" id="alamat-error"></span>
    </div>
    <div class="form-group">
      <label for="usia">Usia</label>
      <input type="text" class="form-control" id="usia" name="usia" placeholder="Masukkan usia">
      <span class="error-message" id="usia-error"></span>
    </div>
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
      </select>
      <span class="error-message" id="jenis-kelamin-error"></span>
    </div>
    </div>
    <div class="sub-container">
    <div class="form-group">
      <label for="tanggal_periksa">Tanggal Periksa</label>
      <input type="date" class="form-control" id="tanggal_periksa" name="tanggal_periksa">
      <span class="error-message" id="tanggal-periksa-error"></span>
    </div>
    <div class="form-group">
      <label for="gigi_sakit">Apakah gigi anda sakit?</label>
      <select class="form-control" id="gigi_sakit" name="gigi_sakit">
        <option value="">Pilih</option>
        <option value="ya">Ya</option>
        <option value="tidak">Tidak</option>
      </select>
      <span class="error-message" id="gigi-sakit-error"></span>
    </div>
    <div class="form-group">
      <label for="gigi_berdarah">Apakah gigi anda berdarah?</label>
      <select class="form-control" id="gigi_berdarah" name="gigi_berdarah">
        <option value="">Pilih</option>
        <option value="ya">Ya</option>
        <option value="tidak">Tidak</option>
      </select>
      <span class="error-message" id="gigi-berdarah-error"></span>
    </div>
    <div class="form-group">
      <label for="kategori_layanan">Layanan yang diajukan</label>
      <select class="form-control" id="kategori_layanan" name="kategori_layanan">
        <option value="">Pilih Layanan</option>
        <option value="Pemeriksaan Gigi dan Mulut">Pemeriksaan Gigi dan Mulut</option>
        <option value="Scaling Gigi">Scaling Gigi</option>
        <option value="Penambalan Gigi">Penambalan Gigi</option>
        <option value="Pencabutan Gigi">Pencabutan Gigi</option>
        <option value="Pemutihan Gigi">Pemutihan Gigi</option>
        <option value="Pemasangan Behel">Pemasangan Behel</option>
        <option value="Pemasangan Crown Gigi">Pemasangan Crown Gigi</option>
        <option value="Konsultasi Ortodonti">Konsultasi Ortodonti</option>
        <option value="Konsultasi Implan Gigi">Konsultasi Implan Gigi</option>
        <option value="Operasi Gigi Bungsu">Operasi Gigi Bungsu</option>
        <option value="Fluoridasi">Fluoridasi</option>
      </select>
      <span class="error-message" id="kategori-layanan-error"></span>
    </div>
    <div class="buttons">
      <a href="{{ route('admin.antrian') }}" class="cancel-button">Batal</a>
      <button type="submit" class="register-button">Daftar</button>
  </div>
    </div>
  </form>
</div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu5')
        })
    // Validasi form
    function validateForm() {
        var errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(function (element) {
            element.innerText = '';
        });

        var nama = document.getElementById('nama').value.trim();
        var noTelepon = document.getElementById('no_telepon').value.trim();
        var alamat = document.getElementById('alamat').value.trim();
        var usia = document.getElementById('usia').value.trim();
        var jenisKelamin = document.getElementById('jenis_kelamin').value.trim();
        var tanggalPeriksa = document.getElementById('tanggal_periksa').value.trim();
        var gigiSakit = document.getElementById('gigi_sakit').value.trim();
        var gigiBerdarah = document.getElementById('gigi_berdarah').value.trim();
        var kategoriLayanan = document.getElementById('kategori_layanan').value.trim();

        if (nama === '') {
            document.getElementById('nama-error').innerText = 'Harap isi Nama!';
            return false;
        }

        if (noTelepon === '') {
            document.getElementById('no-telepon-error').innerText = 'Harap isi No Telepon!';
            return false;
        } else if (!/^\d+$/.test(noTelepon)) {
        document.getElementById('no-telepon-error').innerText = 'Nomor telepon harus berupa angka!';
        return false;
        }

        if (alamat === '') {
            document.getElementById('alamat-error').innerText = 'Harap isi Alamat!';
            return false;
        }

        if (usia === '') {
            document.getElementById('usia-error').innerText = 'Harap isi Usia!';
            return false;
        } else if (!/^\d+$/.test(usia)) {
        document.getElementById('usia-error').innerText = 'Usia harus berupa angka!';
        return false;
        }

        if (jenisKelamin === '') {
            document.getElementById('jenis-kelamin-error').innerText = 'Pilih Jenis Kelamin!';
            return false;
        }

        if (tanggalPeriksa === '') {
            document.getElementById('tanggal-periksa-error').innerText = 'Pilih Tanggal Periksa!';
            return false;
        }

        if (gigiSakit === '') {
            document.getElementById('gigi-sakit-error').innerText = 'Pilih opsi untuk Apakah gigi anda sedang sakit!';
            return false;
        }

        if (gigiBerdarah === '') {
            document.getElementById('gigi-berdarah-error').innerText = 'Pilih opsi untuk Apakah gigi anda berdarah!';
            return false;
        }

        if (kategoriLayanan === '') {
            document.getElementById('kategori-layanan-error').innerText = 'Pilih Kategori Layanan!';
            return false;
        }

        return true;
    }
    </script>
</body>
</html>