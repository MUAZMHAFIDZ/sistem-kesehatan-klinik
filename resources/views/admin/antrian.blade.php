<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | jadwal dokter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content">
        Antrian Pasien
        <!--no,nama,tanggal periksa,waktu,kategori layanan,aksi-->
    </div>
    <div class="antrian">
    <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Periksa</th>
                    <th>Waktu</th>
                    <th>Kategori Layanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tdble">
                    <td>1</td>
                    <td>Budi Hartono</td>
                    <td>19/12/2024</td>
                    <td>9.00</td>
                    <td>Cabut Gigi</td>
                    <td style="color: red;">Hapus</td>
                </tr>
                <tr class="tdble">
                    <td>2</td>
                    <td>Ilham Surya</td>
                    <td>10/12/2024</td>
                    <td>8.00</td>
                    <td>Pasang Behel</td>
                    <td style="color: red;">Hapus</td>
                </tr>
                <tr class="tdble">
                    <td>3</td>
                    <td>Muaz Hafidz</td>
                    <td>5/12/2024</td>
                    <td>12.00</td>
                    <td>Periksa Gigi</td>
                    <td style="color: red;">Hapus</td>
                </tr>
            </tbody>
        </table>
    </div>
    <button class="tombol-tambah"><a href="{{ route('admin.formpasien') }}">Tambah Data</a></button>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu6')
        })
    </script>
</body>
</html>