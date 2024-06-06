<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dokter/homeDokter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/css/dokter/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <title>Dashboard Dokter | Home</title>
</head>

<body class="bg-light">
    @include('dokter/layoutsDokter/navDok')
    <br>
    <div class="dashboard-text ">
        <h1 class="ms-2 txt">DASHBOARD</h1>
        <hr>

        <!-- awal -->
        <div class="container container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 ">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Pasien</p>
                                        <h5 class="font-weight-bolder">
                                            {{$pasienPerHari}}
                                        </h5>
                                        <p class="mb-0">

                                            Hari Ini
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 ms-4 ">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Pasien</p>
                                        <h5 class="font-weight-bolder">
                                            {{$pasienPerMinggu}}
                                        </h5>
                                        <p class="mb-0">

                                            Minggu Ini
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  ms-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Pasien</p>
                                        <h5 class="font-weight-bolder">
                                            {{$pasienPerBulan}}
                                        </h5>
                                        <p class="mb-0">

                                            Bulan Ini
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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


</body>

</html>
