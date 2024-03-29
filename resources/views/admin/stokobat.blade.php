<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | Stok Obat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/stokobat.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content">
        <div class="itemcontent">
            <div class="stokobat">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Obat</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Supplier</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>20</td>
                            <td>tablet</td>
                            <td>Rp. 500000</td>
                            <td>2 Maret 2025</td>
                            <td>PT Mencari Obat Sejati</td>
                            <td>Keterangan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="crud">
                <button class="blue">Tambah</button>
                <button class="green">Edit</button>
                <button class="red">Hapus</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu4')
        })
    </script>
</body>
</html>
