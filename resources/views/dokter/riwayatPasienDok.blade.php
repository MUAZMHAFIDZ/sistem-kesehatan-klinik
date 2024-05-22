<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Pasien</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/dokter/riwayatPasienDok.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    @include('dokter/layoutsDokter/navDok')
    <br>
    <main class="tabelriwayatdok">


        <!-- START DATA -->
        <div class="tabelRiwayat  p-3 bg-body rounded shadow-sm">

                <!-- FORM PENCARIAN -->
                <div class="h4 mb-3">RIWAYAT PASIEN</div>
                 <div class="search pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="panjangsearchriwayat form-control " type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan nama pasien" aria-label="Search">
                  </form>
                </div>


                <table class="table  table-striped" >
                    <thead>
                        <tr>
                            <th class="col-md-2">Nama</th>
                            <th class="col-md-3">Layanan</th>
                            <th class="col-md-2">No Antrian</th>
                            <th class="col-md-2">Tanggal Periksa</th>
                            <th class="col-md-1">Waktu</th>


                        </tr>
                    </thead>
                    <tbody>


                    </tbody>

                </table>
        </div>
          <!-- AKHIR DATA -->
    </main>

  </body>
</html>
