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
                        <img src="{{ asset('/image/defaultProfile.png') }}">

                        {{-- <img src="{{ $user->image }}" alt=""> --}}
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
                            <li><a href="#" class="sidebar-link" data-target="formAppointmentPasien">Buat Janji Temu</a></li>
                            <li><a href="#" class="sidebar-link" data-target="akunPasien">Informasi Akun</a></li>
                            <li><a href="#" class="sidebar-link" data-target="antrianPasien">Antrian</a></li>
                        </ul>
                    </div>
                </div>

                <div class="content" id="dashboardMenuPasien">
                    <h1>Dashboard Information</h1>
                    <p>Kelola informasi Anda, termasuk janji temu dan layanan yang Anda pesan. </p>
                    <div class="card-dashboard">
                        <div class="card1">
                            <h5>Janji Temu Hari Ini</h5>
                            <p>Tidak ada</p>
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                        <div class="card2">
                            <h5>Riwayat Pemeriksaan</h5>
                            <p> tidak ada</p>
                            <ion-icon name="archive-outline"></ion-icon>
                        </div>
                        <div class="card3">
                            <h5>Antrian</h5>
                            <p>Nomer Antrian 4</p>
                            <ion-icon name="body-outline"></ion-icon>
                        </div>
                        <div class="card4">
                            <h5>Feedback</h5>
                            <p>Berikan Kritik dan Saran</p>
                            <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="content" id="formAppointmentPasien">
                    <h1>Formulir Pendaftaran</h1>
                    <p>Silahkan masukkan data yang sebenarnya agar dapat melakukan proses buat janji dengan dokter kami.</p>
                    <form class="appointment-pasien" method="POST" action="{{ route('pasienBuatAntrian') }}">
                      @csrf
                      <div class="nama-field">
                          <input type="text" name="nama" placeholder="Nama Lengkap">
                      </div>
                  
                      <div class="nohp-field">
                          <input type="text" name="no_telepon" placeholder="Nomor Telepon">
                      </div>
                  
                      <div class="alamat-field">
                          <input type="text" name="alamat" placeholder="Alamat">
                      </div>
                  
                      <div class="usia-field">
                          <input type="text" name="usia" placeholder="Usia">
                      </div>
                  
                      <div class="jk-field">
                          <select name="jenis_kelamin">
                              <option value="">Pilih Jenis Kelamin</option>
                              <option value="laki-laki">Laki-laki</option>
                              <option value="perempuan">Perempuan</option>
                          </select>
                      </div>
                  
                      <div class="tanggal-periksa-field">
                          <input type="date" name="tanggal_periksa">
                      </div>
                  
                      <div class="kondisiGigi-field">
                          <select name="gigi_sakit">
                              <option value="">Apakah Gigi Anda Sakit?</option>
                              <option value="ya">Ya</option>
                              <option value="tidak">Tidak</option>
                          </select>
                      </div>
                  
                      <div class="kondisiGigi-field">
                          <select name="gigi_berdarah">
                              <option value="">Apakah Gusi Anda Berdarah?</option>
                              <option value="ya">Ya</option>
                              <option value="tidak">Tidak</option>
                          </select>
                      </div>
                  
                      <div class="kategori-layanan-field">
                        <select class="form-control" id="kategori_layanan" name="kategori_layanan">
                          <option value="">Pilih Layanan</option>
                          <option value="Pemeriksaan Gigi dan Mulut">Pemeriksaan Gigi dan Mulut</option>
                          <option value="Scaling Gigi">Scaling Gigi</option>
                          <option value="Penambalan Gigi">Penambalan Gigi</option>
                          <option value="Pencabutan Gigi">Pencabutan Gigi</option>
                          <option value="Pemutihan Gigi">Pemutihan Gigi</option>
                          <option value="Pemasangan Behel">Pemasangan Behel</option>
                          <option value="Pemasangan Crown Gigi">Pemasangan Crown Gigi</option>
                          <option value="Konsultasi Ortodonti">Konsultasi Ortodonti</option>
                          <option value="Konsultasi Implan Gigi">Konsultasi Implan Gigi</option>
                          <option value="Operasi Gigi Bungsu">Operasi Gigi Bungsu</option>
                          <option value="Fluoridasi">Fluoridasi</option>
                        </select>
                      </div>
                  
                      {{-- <div class="durasi-layanan-field">
                          <input type="text" name="durasi_layanan" placeholder="Durasi Layanan">
                      </div> --}}
                  
                      {{-- <div class="waktu-field">
                          <input type="time" name="waktu">
                      </div>
                  
                      <div class="nomor-field">
                          <input type="text" name="nomor" placeholder="Nomor">
                      </div> --}}
                  
                      <div class="tombol-appointment">
                          <button type="submit">Kirim</button>
                      </div>
                  </form>
                </div>

                <div class="content" id="akunPasien">
                    <h1>Informasi Akun</h1>
                    <p>Manage your information, including the appointments and services you book. </p>
                    <div class="card-dashboard">
                        <div class="card1">
                            <h5>Username</h5>
                            <p>{{ $user->username }}</p>
                            <ion-icon name="person-outline"></ion-icon>
                        </div>
                        <div class="card2">
                            <h5>Fullname</h5>
                            <p>{{ $user->fullname }}</p>
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </div>
                        <div class="card3">
                            <h5>Nomer Telepon</h5>
                            <p>{{ $user->nohp }}</p>
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <div class="card4">
                            <h5>Password</h5>
                            <p>Reset Password?</p>
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="content" id="antrianPasien">
                    <h1>Antrian</h1>
                    <p>Lihat Detail Buat Janji Anda </p>
                    <table class="appointment-results">
                          <tr>
                              <th>Nama Lengkap</th>
                              <td>{{ $user->fullname }}</td>
                          </tr>
                          <tr>
                              <th>Nomor Telepon</th>
                              <td>{{ $user->no_telepon }}</td>
                          </tr>
                          <tr>
                              <th>Alamat</th>
                              <td>{{ $user->alamat }}</td>
                          </tr>
                          <tr>
                              <th>Usia</th>
                              <td>{{ $user->usia }}</td>
                          </tr>
                          <tr>
                              <th>Jenis Kelamin</th>
                              <td>{{ $user->jenis_kelamin }}</td>
                          </tr>
                          <tr>
                              <th>Tanggal Periksa</th>
                              <td>{{ $user->tanggal_periksa }}</td>
                          </tr>
                          <tr>
                              <th>Jam</th>
                              <td>{{ $user->tanggal_periksa }}</td>
                          </tr>
                          <tr>
                              <th>Layanan</th>
                              <td>{{ $user->kategori_layanan }}</td>
                          </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

<script src="{{ asset ('/js/dashboardPasien.js')}}"></script>

</body>
</html>