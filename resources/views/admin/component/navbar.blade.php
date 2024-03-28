<nav>
    <div class="logo">
        <div class="img">
            <img src="{{ asset('logo.png') }}" alt="">
        </div>
        <div class="account">
            <span>admin - michaeljackson</span>
            <img src="{{ asset('image/admin/admin-artoria.jpg') }}" alt="">
        </div>
    </div>
    <div class="navbar">
        <ul>
            <li><a id="menu1" href="{{ route('admin.home') }}"><i class="fa-solid fa-house"></i><span>Dashboard</span></a></li>
            <li><a id="menu2" href="{{ route('admin.profil') }}"><i class="fa-solid fa-user"></i><span>Profil</span></a></li>
            <li><a id="menu3" href="{{ route('admin.jadwaldok') }}"><i class="fa-solid fa-calendar"></i><span>Jadwal Dokter</span></a></li>
            <li><a id="menu4" href="{{ route('admin.stok') }}"><i class="fa-solid fa-pills"></i><span>Stok Obat</span></a></li>
            <li><a id="menu5" href="#"><i class="fa-solid fa-file-medical"></i><span>Data Pasien</span></a></li>
            <li><a id="menu6" href="{{ route('admin.antrian') }}"><i class="fa-solid fa-id-card"></i><span>Antrian Pasien</span></a></li>
            <li><a id="menu7" href="#"><i class="fa-solid fa-book-medical"></i><span>Riwayat Pasien</span></a></li>
            <li><a id="menu8" href="#"><i class="fa-solid fa-print"></i><span>Cetak Laporan</span></a></li>
           
            <li class="out"><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Keluar</span></a></li>
        </ul>
    </div>
</nav>
<script src="{{ asset('js/navwhite.js') }}"></script>