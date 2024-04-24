<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dental Care Klinik</title>

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0
    ,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Style Navbar -->
    <link rel="stylesheet" href="{{ asset ('/css/pasien/stylePagesPasien.css') }}">

</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <div class="logo">
            <span>Dental Care</span>
        </div>

        <!-- Class ini hanya ditampilkan kepada user|pasien yang berhasil login -->
        @auth

        <div class="navbar-extra">
            <div class="navbar-logout">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Sign out</button>
                </form>
            </div>

            <!-- Class ini hanya ditampilkan kepada guest user-->
            @else
            <div class="navbar-guest">
                <a href="#home">Beranda</a>
                <a href="#fasilitas">Fasilitas</a>
                <a href="#dokter">Dokter</a>
                <a href="#jam-kerja">Jam Kerja</a>
                <a href="#">Kontak</a>
            </div>

            <div class="navbar-guest">
                <a href="{{ route('/login') }}">Sign In</a>
                <a href="{{ route('/register') }}">Create Your Account</a>
            </div>   
            @endauth
        </div>     
    </nav>
    <!-- Navbar End -->
    
    <!-- Ionicons Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>