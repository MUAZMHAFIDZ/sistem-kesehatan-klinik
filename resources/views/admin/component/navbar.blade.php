<nav class="navmutlak">
    <div class="logoz">
        <div class="img">
            <img src="{{ asset('logo.png') }}" alt="">
        </div>
        <div class="accountz">
            <span>{{ $user->username }}</span>
            <img src="{{ $user->image }}" alt="">
        </div>
    </div>
    <div class="navbarz">
        <ul>
            <li><a id="menu1" href="{{ route('admin.home') }}"><i class="fa-solid fa-house"></i><span>Dashboard</span></a></li>
            <li><a id="menu2" href="{{ route('admin.profil') }}"><i class="fa-solid fa-user"></i><span>Profil</span></a></li>
            <li><a id="menu9" href="{{ route('admin.datadokter') }}"><i class="fa fa-stethoscope"></i><span>Data Dokter</span></a></li>
            <li><a id="menu3" href="{{ route('admin.jadwaldok') }}"><i class="fa-solid fa-calendar"></i><span>Jadwal Dokter</span></a></li>
            <li><a id="menu6" href="{{ route('admin.antrian') }}"><i class="fa-solid fa-id-card"></i><span>Antrian Pasien</span></a></li>
            <!-- <li><a id="menu7" href="#"><i class="fa-solid fa-book-medical"></i><span>Riwayat Pasien</span></a></li> -->
            <li><a id="menu4" href="{{ route('admin.rekammedis') }}"><i class="fa-solid fa-file-pdf"></i><span>Rekam Medis</span></a></li>
           
            <li class="out"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Keluar</span></a></li>
            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="displat: none;">@csrf</form>
        </ul>
    </div>
</nav>
<script src="{{ asset('js/navwhite.js') }}"></script>