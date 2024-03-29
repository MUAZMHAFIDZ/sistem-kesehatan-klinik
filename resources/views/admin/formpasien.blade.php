<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/formpasien.css') }}">
</head>
<body>
    <div id="contentform">
    <div id="topbar">    
        <h3 class="judul">Klinik Dental Care : Formulir Pendaftaran</h3>
        <p>Tambahkan data pendaftaran pasien baru</p>
    </div>
    <div class="container">
        <form action="#" method="post" class="registration-form">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="nama" placeholder="Nama" class="input-field">
                    <input type="tel" name="no_telepon" placeholder="No Telepon" class="input-field">
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="alamat" placeholder="Alamat" class="input-field">
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="number" name="usia" placeholder="Usia" class="input-field">
                    <select name="jenis_kelamin" class="input-field">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <input type="date" name="tanggal_periksa" class="input-field">
                </div>
            </div>
            <div class="form-group">
                <label for="sakit_gigi">Apakah gigi anda sedang sakit?</label>
                <select name="sakit_gigi" class="input-field">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="berdarah_gigi">Apakah gigi anda berdarah?</label>
                <select name="berdarah_gigi" class="input-field">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="layanan">Layanan yang Diajukan</label>
                <textarea name="layanan" class="input-field"></textarea>
            </div>
            <div class="form-group buttons">
                <button type="button" class="cancel-button"><a href="{{ route('admin.antrian') }}">Batal</a></button>
                <button type="submit" class="register-button">Daftar</button>
            </div>
        </form>
    </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu5')
        })
    </script>
</body>
</html>