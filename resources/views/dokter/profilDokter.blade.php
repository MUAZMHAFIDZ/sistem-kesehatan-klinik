<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-dokter | Profil</title>

    <link rel="stylesheet" href="css/dokter/profilDokter.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="ok">
    @include('dokter/layoutsDokter/navDok');
    <div class="container ">
        <!-- Halaman Profil -->

        <div class="profilDokter rounded shadow mt-4 text-primary">
                <div class="d-flex flex-column align-items-center text-center py-5  ">
                    <img class="rounded-circle mt-3 profimg" width="150px" height="150px" src="profildokter3.jpg"><span
                        class="h3 mt-4 text-primary">{{ $user->username }}</span><span
                        class="text-primary">ilhamsurya@gmail.com</span><span> </span>
            </div>
        </div>


        <div class="editProfilDokter rounded shadow mt-2 ">
                
            <div class="card-body d-flex ms-5 mb-3">
                <form action="{{ route('user.profile.update') }}" method="POST" class="form-pill">
                    @csrf
                    
                    <div class="form-group mt-5 ">
                        <label for="exampleFormControlPassword3" class="mb-1">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $user['username'] }}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleFormControlPassword3" class="mb-1">Fullname</label>
                        <input type="text" class="form-control" name="fullname" value="{{ $user['fullname'] }}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleFormControlPassword3" class="mb-1">Nomor Telepon</label>
                        <input type="text" class="form-control" name="nohp" value="{{ $user['nohp'] }}">
                    </div>
                    <div class="btnSubmitProfile mt-5"><button class="btn btn-primary" type="submit">Save Profile</button>
                    </div>
                </form>


            </div>



        </div>

</body>
