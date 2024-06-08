<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content contentsz">

    <!-- ========================== pasien hari ini ========================== -->
    <div class="home">
        <div class="item">
            <div class="headcard">
                <p>Pasien Hari Ini</p>
            </div>
            <div class="card">
                @foreach($pasienHariIni as $phi)
                <div class="data">
                    <p>{{$phi->nama}}</p>
                </div>
                @endforeach
            </div>
        </div>
        <!-- ========================== dokter bertugas hari ini ========================== -->
        <div class="item">
            <div class="headcard">
                <p>Dokter Bertugas Hari ini</p>
            </div>
            <div class="card">
                @foreach($dokterBertugas as $activeDT)
                <div class="data">
                    <p>dr. {{ $activeDT->users->fullname }} <span> | {{$activeDT->$hariIni}}</span></p>
                </div>
                @endforeach
            </div>
        </div>
        <!-- ========================== dokter aktif ========================== -->
        <div class="item">
            <div class="headcard">
                <p>Dokter Online</p>
            </div>
            <div class="card">
                @foreach($activeDokter as $activeD)
                <div class="data">
                    <p>dr. {{ $activeD->fullname }}</p>
                </div>
                @endforeach
            </div>
        </div>
        <!-- ========================== admin aktif ========================== -->
        <div class="item">
            <div class="headcard">
                <p>Admin Online</p>
            </div>
            <div class="card">
                @foreach($activeAdmin as $activeA)
                <div class="data">
                    <p>{{ $activeA->username }}</p>
                </div>
                @endforeach
            </div>
        </div>
        <!-- ========================== survey pasien ========================== -->
        <div class="itemlong">
            <div class="headcard">
                <p>Jumlah Pasien</p>
            </div>
            <div class="card">
                <div class="data">
                    <p>Dalam Sehari</p>
                    <div class="percent1"><p>{{$pasienPerHari}}</p></div>
                </div>
                <div class="data">
                    <p>Dalam Seminggu</p>
                    <div class="percent2"><p>{{$pasienPerMinggu}}</p></div>
                </div>
                <div class="data">
                    <p>Dalam Sebulan</p>
                    <div class="percent3"><p>{{$pasienPerBulan}}</p></div>
                </div>
            </div>
        </div>
        <!-- ========================== absen dokter ========================== -->
        <div class="item">
            <div class="headcard">
                <p>Absensi Dokter</p>
            </div>
            <div class="card">
                @php
                    $today = date('Y-m-d');
                @endphp
                @foreach($dokterBertugas as $hadirDT)
                <div class="data">
                    <p>dr. {{ $hadirDT->users->fullname }}<span>{{ $hadirDT->terakhir_hadir == $today ? '( Hadir )' : '( Belum Hadir)' }}</span></p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu1')
        })
    </script>
</body>
</html>
