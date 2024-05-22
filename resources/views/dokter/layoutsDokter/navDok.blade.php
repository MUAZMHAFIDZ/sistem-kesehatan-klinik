<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0
    ,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dokter/navDokter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <nav>
     <div class="logo">
        <div class="img">
       
    </div>
    <div class="profil">
        <span>dr. {{ $user->username }}</span>
        <a href="{{ route('dokter.profilDokter') }}"><img src="{{$user->image}}"></a>
     </div>
     
</div>
<div class="navbarDokter bg-primary">
<ul>
    <li class=" mb-2"><a><span><img class="logodental" src="dentalcare.png"></span></a></li>
    <li><a href="{{ route('dokter.homeDokter') }}"><i class="bi bi-house-door"></i><span>Beranda</span></a></li>
    <li><a href="{{ route('dokter.profilDokter') }}"><i class="bi bi-person"></i><span>My Profile</span></a></li>
    
    <li><a href="{{ route('dokter.antrianPasienDok') }}"><i class="bi bi-clipboard"></i><span>Antrian Pasien</span></a></li>
    <li><a href="{{ route('dokter.riwayatPasienDok')}}"><i class="bi bi-clipboard-check"></i><span>Riwayat Pasien</span></li>
    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="bi bi-box-arrow-left"></i> <span>Logout</span></a></li>
    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">@csrf</form>
</ul>

</div>
    
</body>
</html>
