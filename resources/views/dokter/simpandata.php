<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-dokter | Profil</title>
  
    <link rel="stylesheet" href="css/dokter/profilDokter.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
</head>
<body>
    @include('dokter/layoutsDokter/navDok');
    <main class="container">
        <!-- Halaman Profil -->
    
    <div class="profilDokter rounded shadow mt-4">
        <div>
            <div class="fotoProfil d-flex flex-column align-items-center col-md-3 mx-auto"></div>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5 ">
            <img class="rounded-circle mt-3 profimg" width="150px" height="150px" src="profildokter3.jpg"><span class="h3 mt-3">{{ $user->username }}</span><span class="text-white-60">ilhamsurya@gmail.com</span><span> </span></div>
            </div>
            <hr>
            <div class=" border-right profimid">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-around align-items-center mb-3">
                    <h4 class="d-flex justify-content-around align-items-center mb-5">PROFILE</h4>
                </div>
                <div class="row ">
                    <div class="col-md-6"><label class="labels">Nama</label><input type="text" class="form-control small-placeholder" placeholder="Masukkan nama" value=""></div>
                    <div class="col-md-6"><label class="labels">Jenis Kelamin</label><input type="text" class="form-control small-placeholder" value="" placeholder="Masukkan jenis kelamin"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">No Telepon</label><input type="text" class="form-control small-placeholder" placeholder="Masukkan no telepon" value=""></div>
                    <div class="col-md-6"><label class="labels">E-mail</label><input type="text" class="form-control small-placeholder" placeholder="Masukkan e-mail" value=""></div>
                    <div class="col-md-6 mt-2"><label class="labels">Provinsi</label><input type="text" class="form-control small-placeholder" placeholder="Masukkan provinsi" value=""></div>
                    <div class="col-md-6 mt-2"><label class="labels">Kabupaten/Kota</label><input type="text" class="form-control small-placeholder" placeholder="Masukkan kabupaten/kota" value=""></div>
                    <div class="col-md-6 mt-2"><label class="labels">Kecamatan</label><input type="text" class="form-control small-placeholder" placeholder="Masukkan kecamatan" value=""></div>
                    <div class="col-md-6 mt-2"><label class="labels">Alamat Lengkap</label><input type="text" class="form-control small-placeholder" placeholder="Masukkan alamat" value=""></div></div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Negara</label><input type="text" class="form-control small-placeholder" placeholder="Negara" value=""></div>
                    <div class="col-md-6"><label class="labels">Kode Post</label><input type="text" class="form-control small-placeholder" value="" placeholder="Kode post"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
            </div>
            <div class="col-md-4 profiright">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Riwayat Pendidikan </span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Pendidikan</span></div><br>
                <div class="col-md-12"><label class="labels">Riwayat Pendidikan</label><input type="text" class="form-control small-placeholder" placeholder="Masukkan pendididkan" value=""></div> <br>
                <!-- <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div> -->
            </div>
            </div>
        </div>
    </div>
</div>

    </main>
</body>
