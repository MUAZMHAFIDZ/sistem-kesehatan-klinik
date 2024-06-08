<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dokter | Profil</title>

    <link rel="stylesheet" href="css/dokter/profilDokter.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0
    ,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">
    @include('dokter/layoutsDokter/navDok')
    <br>
    <main class="formProfilDokter">
        <!-- Halaman Profil -->
        <div class="profilDokter rounded shadow-sm ">
            <div class="profImg py-5 d-flex align-items-center">
                <img class="rounded-circle mb-5 profimg" width="150px" height="150px"  src="{{ $user->image }}" alt="">


                <div class="textUserEmail mt-1">
                    <span class="h3 fontNamaDok ">{{ $user->username }}</span>
                    <i class="d-block"><img src="logoemail.png" width="20px"><span class="ms-1 text-primary">{{ $user->email }}
                    <i class="bi bi-telephone ms-2 text-black"><span class="ms-1 text-black">{{ $user->nohp }}</span></i></span></i>
                    <h6 class="riwayatDok mt-2">Riwayat Pendidikan</h6>
                    <span class="ms-1 d-block riwayatDoktext">{{ $user->riwayat_pendidikan }}</span>
                </div>
            </div>
        </div>

        <div class="editProfilDokter rounded shadow-sm mt-2 ">
            <div class="card-body ms-5 mb-3">
                <form action="{{ route('user.profile.update') }}" method="POST" class="form-pill">
                    @csrf

                    <div class="row">
                        <h6 class="infoPribadi  mt-5">INFORMASI PRIBADI</h6>
                        <div class="col-md-5 mt-3 ms-3">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlPassword3" class="mb-1 fontEditDok">Username</label>
                                <input type="text" class="form-control form-control-sm" name="username" value="{{ $user['username'] }}">
                            </div>

                            <div class="form-group mt-3">
                                <label for="exampleFormControlPassword3" class="mb-1 fontEditDok">Fullname</label>
                                <input type="text" class="form-control form-control-sm" name="fullname" value="{{ $user['fullname'] }}">
                            </div>

                            <div class="form-group mt-3">
                                <label for="exampleFormControlPassword3" class="mb-1 fontEditDok">Email</label>
                                <input type="Email" class="form-control form-control-sm" name="email" value="{{ $user['email'] }}">
                            </div>
                        </div>
                        <div class="col-md-5 mt-3 ms-5">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlPassword3" class="mb-1 fontEditDok">Nomor Telepon</label>
                                <input type="tel" class="form-control form-control-sm" name="nohp" value="{{ $user['nohp'] }}">
                            </div>

                            <div class="form-group mt-3">
                                <label for="exampleFormControlPassword3" class="mb-1 fontEditDok">Alamat</label>
                                <input type="text" class="form-control form-control-sm" name="alamat" value="{{ $user['alamat'] }}">
                            </div>

                            <div class="form-group mt-3">
                                <label for="exampleFormControlPassword3" class="mb-1 fontEditDok">Riwayat Pendidikan</label>
                                <input type="text" class="form-control form-control-sm" name="riwayat_pendidikan" value="{{ $user['riwayat_pendidikan'] }}">
                            </div>
                        </div>
                    </div>

                    <div class="btnSubmitProfile mt-5">
                        <button class="btn btn-primary" type="submit">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>


    </main>
</body>

</html>
