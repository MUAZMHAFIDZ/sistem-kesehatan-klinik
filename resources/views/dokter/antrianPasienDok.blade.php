<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Antrian Pasien</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/dokter/antrianPasienDok.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    @include('dokter/layoutsDokter/navDok')
    <br>
    <div class="container">
        <!-- START DATA -->
        <div class="tabelAntrian my-4 p-2 bg-body rounded shadow-sm ">
            <div class="h3 mb-3">ANTRIAN PASIEN</div>
                <!-- FORM PENCARIAN -->
                <div class="search pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('') }}" placeholder="Masukkan nama pasien" aria-label="Search">
                      <button class="btn btn-primary" type="submit">Cari</button>
                  </form>
                </div>
            
          
                <table class="table table-striped">
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
                            <td>Ilham Suryaputra</td>
                            <td>19/12/2024</td>
                            <td>09.00</td>
                            <td>Cabut gigi</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Accept</a>
                                <a href='' class="btn btn-danger btn-sm">Decline</a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>Muaz Muhamad</td>
                            <td>20/5/2024</td>
                            <td>12.00</td>
                            <td>Periksa gigi</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Accept</a>
                                <a href='' class="btn btn-danger btn-sm">Decline</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
               
          </div>
          
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>