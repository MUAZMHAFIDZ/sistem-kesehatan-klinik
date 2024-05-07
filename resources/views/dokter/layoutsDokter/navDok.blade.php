<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="css/dokter/navDokter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <nav>
     <div class="logo">
        <div class="img">
        <img src="{{ asset('dentalcare.png') }}" alt="">
    </div>
    <div class="profil">
        <span>{{ $user->username }}</span>
        <img src="profildokter3.jpg" alt="Foto_profil"> 
     </div>

  
        

</div>
<div class="navbarDokter">
<ul>
    <li style=""><a id="menu1" href="{{ route('dokter.homeDokter') }}"><i class="fa-solid fa-house"></i><span>Beranda</span></a></li>
    <li style=""><a id="menu2" href="{{ route('dokter.profilDokter') }}"><i class="fa-solid fa-user"></i><span>My Profile</span></a></li>
    <li style=""><a id="menu3" href="{{ route('dokter.antrianPasienDok') }}"><i class="fa-solid fa-id-card"></i><span>Antrian Pasien</span></a></li>
    <li style="" ><a id="menu4" href="{{ route('dokter.riwayatPasienDok')}}"><i class="fa-solid fa-book-medical"></i><span>Riwayat Pasien</span></li>
               
    <li class="out"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Logout</span></a></li>
    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">@csrf</form>
</ul>

</div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
