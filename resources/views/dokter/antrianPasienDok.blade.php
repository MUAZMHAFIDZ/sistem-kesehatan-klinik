<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Dokter | Antrian Pasien</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/dokter/antrianPasienDok.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-light">
    @include('dokter/layoutsDokter/navDok')
    <br>
    <div class="tabelantriandok">
        <!-- START DATA -->
        <div class="tabelAntrian p-3 bg-body rounded shadow-sm ">
            <div class="h4 mb-3">ANTRIAN PASIEN</div>
            <!-- FORM PENCARIAN -->
            <div class="search pb-3">
                <form class="d-flex" action="" method="get">
                    <input class="panjangsearchantrian form-control" type="search" name="katakunci" id="searchInput"
                        placeholder="Masukkan nama pasien" aria-label="Search" oninput="searchData()">


                </form>
            </div>


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-2">Nama</th>
                        <th class="col-md-3">Layanan</th>
                        <th class="col-md-2">No Antrian</th>
                        <th class="col-md-2">Tanggal Periksa</th>
                        <th class="col-md-1">Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $antrian)
                        <tr>
                            <td class="kolom-nama">{{ $antrian->nama }}</td>
                            <td class="kolom-layanan">{{ $antrian->kategori_layanan }}</td>
                            <td>{{ $antrian->nomor }}</td>
                            <td>{{ $antrian->tanggal_periksa }}</td>
                            <td>{{ $antrian->waktu instanceof \Carbon\Carbon ? $antrian->waktu->format('H:i') : $antrian->waktu }}
                            </td>
                            <td><a href='' class="btn btn-warning btn-sm">Accept</a></td>
                            <td><a href='' class="btn btn-warning btn-sm">Decline</a></td>
                    @endforeach
                </tbody>
            </table>

        </div>

        <!-- AKHIR DATA -->

        <script>
            // Bagian JavaScript
            function searchData() {
                // Ambil nilai dari input pencarian
                var katakunci = document.getElementById('searchInput').value.toLowerCase();

                // Ambil semua baris data
                var rows = document.querySelectorAll('.table tbody tr');

                // Loop melalui setiap baris data
                rows.forEach(function(row) {
                    // Ambil teks dari kolom nama pada baris saat ini
                    var nama = row.querySelector('.kolom-nama').textContent.toLowerCase();

                    // Periksa apakah teks nama mengandung kata kunci pencarian
                    if (nama.indexOf(katakunci) === -1) {
                        // Jika tidak cocok, sembunyikan baris
                        row.style.display = 'none';
                    } else {
                        // Jika cocok, tampilkan baris
                        row.style.display = '';
                    }
                });
            }
        </script>
</body>

</html>
