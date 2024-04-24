<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Official Website Klinik Dental Care</title>

</head>
<body>
    @include('pasien.layout.navbarPasien')

    <section class="dashboard-pasien" id="dashboard-pasien">

        <div class="container-dashboard-pasien">
            <div class="container-pasien">
                <div class="sidebar-pasien">
                    <div class="profile-picture">

                    </div>
                    <div class="nama-pasien">
                        <span>
                            Selamat Datang <br>
                        </span>
                        {{ $user->fullname }}
                    </div>

                    <div class="sidebar">
                        <ul>
                            <li><a href="#" class="sidebar-link" data-target="dashboardMenuPasien">Beranda</a></li>
                            <li><a href="#" class="sidebar-link" data-target="dashboardAppointmentPasien">Buat Janji Temu</a></li>
                            <li><a href="#" class="sidebar-link" data-target="akunPasien">Informasi Akun</a></li>
                        </ul>
                    </div>
                </div>

                <div class="content" id="dashboardMenuPasien">
                    <h1>Dashboard Information</h1>
                    <p>Kelola informasi Anda, termasuk janji temu dan layanan yang Anda pesan. </p>
                    <div class="card-dashboard">
                        <div class="card1">
                            <h6>Janji Temu Hari Ini</h6>
                            <p>Tidak ada</p>
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                        <div class="card2">
                            <h6>Riwayat Pemeriksaan</h6>
                            <p> tidak ada</p>
                            <ion-icon name="archive-outline"></ion-icon>
                        </div>
                        <div class="card3">
                            <h6>Antrian</h6>
                            <p>Nomer Antrian 4</p>
                            <ion-icon name="body-outline"></ion-icon>
                        </div>
                        <div class="card4">
                            <h6>Feedback</h6>
                            <p>Berikan Kritik dan Saran</p>
                            <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="content" id="dashboardAppointmentPasien">
                    <h1>Formulir Pendaftaran</h1>
                    <p>Silahkan masukkan data yang sebenarnya agar dapat melakukan proses buat janji dengan dokter kami.</p>
                    <form class="appointment-pasien" method="POST" action="" >
                        @csrf
                        <div class="nama-pasien">
                            <input type="text" name="fullname" placeholder="Nama Lengkap" value="{{ old('fullname') }}">
                        </div>

                        <div class="usia-pasien">
                            <input type="text" name="usiaPasien" placeholder="Usia" value="{{ old('usiaPasien') }}">
                        </div>

                        <div class="jk-pasien">
                            <select id="jenis-kelamin" name="jenisKelamin">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="ttl-pasien">
                            <input type="date" name="ttlPasien">
                            <label for="ttlPasien">Masukkan Tanggal Lahir Anda.</label>
                        </div>

                        <div class="tanggalBuatJanji">
                            <input type="datetime-local" id="appointmentDateTime" name="appointmentDateTime">
                            <label for="tanggalBuatJanji">Pilih Rencana Tanggal dan Waktu Buat janji.</label>
                        </div>

                        <div class="alamat-pasien">
                            <input type="text" name="alamatPasien" id="alamatPasien" placeholder="Masukkan Alamat Saat Ini">
                            <label for="alamatPasien">Masukkan Alamat Lengkap</label>
                        </div>
                        
                        <div class="kondisiPasien">
                            <input type="text" name="keteranganPasien" id="kondisiPasien" placeholder="Contoh: Mengalami nyeri gusi">
                            <label for="keteranganPasien">Kondisi Gigi Anda Saat Ini</label>
                        </div>
                        
                        <button type="submit">Buat Janji Temu</button>
                    </form>
                </div>

                <div class="content" id="akunPasien">
                    <h1>Informasi Akun</h1>
                    <p>Manage your information, including the appointments and services you book. </p>
                    <div class="card-dashboard">
                        <div class="card1">
                            <h6>Username</h6>
                            <span>{{ $user->username }}</span>
                            <ion-icon name="person-outline"></ion-icon>
                        </div>
                        <div class="card2">
                            <h6>Fullname</h6>
                            <span>{{ $user->fullname }}</span>
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </div>
                        <div class="card3">
                            <h6>Nomer Telepon</h6>
                            <span>{{ $user->nohp }}</span>
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <div class="card4">
                            <h6>Password</h6>
                            <p>Reset Password?</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

<script src="/js/dashboardPasien.js"></script>
    
</body>
</html>