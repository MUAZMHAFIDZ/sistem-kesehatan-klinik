<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>


/* PROFIL DAN LOGO DISINI */

nav .logo {
    position: fixed;
    display: flex;
    height: 40px;
    width: 100%;
    margin: 0;
    justify-content: space-around;
    border-bottom: 1px solid rgb(0, 4, 255);
}
.logo .img {
    width: 70%;
}
.logo .img img {
    width: 150px;
    margin-top: 5px;
}
.logo .profil {
    width: 25%;
    display: flex;
    justify-content: flex-end; 
}
.logo .profil span {
    margin: 15px;
    color: #000000;
    font-weight: normal;
    margin-top: 10px;
}

.logo .profil img {
    width: 30px;
    height: 30px;
    border: 1px solid #ffffff;
    border-radius: 50%;
    margin-top: 5px;
    margin-right: 20px;
}

/* NAVBAR DI KIRI */
nav .navbarDokter {
    position: fixed;
    top: 40px;
}
.navbarDokter ul {
    display: flex;
    height: 100vh;
    width: 120%;
    background-color: #005eff;
    flex-direction: column;
    margin: 0;
    overflow: hidden;
    transition: .5s;
    border: 1px solid #005eff;
    border-top-right-radius: 15px;
}
.navbarDokter li {
    list-style-type: none;
    height: 40px;
    width: 100%;
    margin: 10px 0 0 0;
}
.navbarDokter li.out {
    margin-top: 150%;
}
.navbarDokter a:hover {
    color: rgb(0, 5, 80);
}
.navbarDokter li a {
    height: 100%;
    width: 100%;
    display: block;
    text-decoration: none;
    color: rgb(255, 255, 255);
    padding-top: 20px;    
}
.navbarDokter li i {
    color:#0a0059;
    width: 30px;
}
</style>
</head>
<body>
    <nav>
     <div class="logo">
        <div class="img">
        <img src="{{ asset('dentalcare.png') }}" alt="">
    </div>
     <div class="profil">
        <span>{{ $user->name }}</span>
        <img src="/ilhamss.jpg" alt="Foto_profil"> 
     </div>
</div>
<div class="navbarDokter">
<ul>
    <li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><a id="menu1" href="{{ route('dokter.homeDokter') }}"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
    <li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><a id="menu2" href="{{ route('dokter.profilDokter') }}"><i class="fa-solid fa-user"></i><span>Profil</span></a></li>
    <li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><a id="menu6" href="{{ route('dokter.antrianPasienDok') }}"><i class="fa-solid fa-id-card"></i><span>Antrian Pasien</span></a></li>
    <li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif" ><a id="menu7" href="{{ route('dokter.riwayatPasienDok')}}"><i class="fa-solid fa-book-medical"></i><span>Riwayat Pasien</span></li>
               
    <li class="nav-item"><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i><span style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Logout</span></a></li>
</ul>
</div>
    </nav>
</body>
</html>
