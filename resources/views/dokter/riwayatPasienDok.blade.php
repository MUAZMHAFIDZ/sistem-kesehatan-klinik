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
    <main class="container">
     
        <!-- START DATA -->
        <div class="tabelRiwayat my-4 p-2 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="h3 mb-3">RIWAYAT PASIEN</div>
                 <div class="search pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan nama pasien" aria-label="Search">
                      <button class="btn btn-primary" type="submit">Cari</button>
                  </form>
                </div>
                
                
                <table class="table  table-striped" >
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Nama</th>
                            <th class="col-md-2">Tanggal Periksa</th>
                            <th class="col-md-1">Waktu</th>
                            <th class="col-md-2">Layanan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bagus Prasetyo</td>
                            <td>9/10/2024</td>
                            <td>14.00</td>
                            <td>Cabut gigi</td>
                            <td>
                                <a href='' class="btn btn-danger btn-sm">Delete</a>
                                
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>Muhammad Ikhsan</td>
                            <td>11/9/2024</td>
                            <td>20.00</td>
                            <td>Periksa gigi</td>
                            <td>
                                <a href='' class="btn btn-danger btn-sm">Delete</a>
                               
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>   
          <!-- AKHIR DATA -->
    </main>

  </body>
</html>