<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/profile.css') }}">

</head>
<body>
    @include('admin.component.navbar');
<div id="content" class="content">
        <!-- Halaman Profil -->
    <div class="container rounded bg-white mt-5 mb-5 bigcontent">
        <div class="row">
            <div class="col-md-3 border-right profileft">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5 profimg" width="150px" height="150px" src="https://cdn.idntimes.com/content-images/duniaku/post/20220512/thomas-shelby-4-c6626ec143b4ea090084ac7d303e93b7_600x400.png"><h5>Mr. Thomas Shelby</h5><span class="text-white-60">tommyshelby@mail.com</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right profimid">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="Masukkan nama" value=""></div>
                    <div class="col-md-6"><label class="labels">Jenis Kelamin</label><input type="text" class="form-control" value="" placeholder="Masukkan jenis kelamin"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">No Telepon</label><input type="text" class="form-control" placeholder="Masukkan no telepon" value=""></div>
                    <div class="col-md-12"><label class="labels">E-mail</label><input type="text" class="form-control" placeholder="Masukkan e-mail" value=""></div>
                    <!-- <div class="col-md-12"><label class="labels">Negara</label><input type="text" class="form-control" placeholder="Masukkan negara" value=""></div> -->
                    <div class="col-md-12"><label class="labels">Provinsi</label><input type="text" class="form-control" placeholder="Masukkan provinsi" value=""></div>
                    <div class="col-md-12"><label class="labels">Kabupaten/Kota</label><input type="text" class="form-control" placeholder="Masukkan kabupaten/kota" value=""></div>
                    <div class="col-md-12"><label class="labels">Kecamatan</label><input type="text" class="form-control" placeholder="Masukkan kecamatan" value=""></div>
                    <div class="col-md-12"><label class="labels">Alamat Lengkap</label><input type="text" class="form-control" placeholder="Masukkan alamat" value=""></div>
                <!--<div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div> -->
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Negara</label><input type="text" class="form-control" placeholder="Negara" value=""></div>
                    <div class="col-md-6"><label class="labels">Kode Post</label><input type="text" class="form-control" value="" placeholder="Kode post"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
            </div>
            <div class="col-md-4 profiright">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Riwayat Pendidikan </span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Pendidikan</span></div><br>
                <div class="col-md-12"><label class="labels">Riwayat Pendidikan</label><input type="text" class="form-control" placeholder="Masukkan pendididkan" value=""></div> <br>
                <!-- <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div> -->
            </div>
            </div>
        </div>
    </div>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu2')
        })
    </script>
</body>
