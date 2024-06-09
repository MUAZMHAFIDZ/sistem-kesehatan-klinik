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
                    {{-- <img src="{{ asset('/image/defaultProfile.png') }}">  --}}
                        <img src="{{ $user->image }}" alt="Profile Picture">
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
                            <li><a href="#" class="sidebar-link" data-target="antrianPasien">Lihat Antrian</a></li>
                            <li><a href="#" class="sidebar-link" data-target="akunPasien">Informasi Akun</a></li>
                            <li><a href="#" class="sidebar-link" data-target="lengkapiAkunPasien">Perbarui Akun</a></li>
                        </ul>
                    </div>
                </div>

                <div class="content" id="dashboardMenuPasien">
                    <div class="header-dashboard-pasien">
                        <h1>Dashboard Information</h1>
                        <p>Kelola informasi Anda, termasuk janji temu dan layanan yang Anda pesan. </p>
                    </div>
                    <div class="card-dashboard">
                        <div class="card-dashboard-pasien">
                            <h5>Janji Temu Hari Ini</h5>
                            @if ($user->antrian)
                                <span>Pukul {{ $user->antrian->waktu }} WIB</span> 
                            @else
                                <span>Tidak Ada</span>
                            @endif
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                        <div class="card-dashboard-pasien">
                            <h5>Riwayat Pemeriksaan</h5>
                            <span> tidak ada</span>
                            <ion-icon name="archive-outline"></ion-icon>
                        </div>
                        <div class="card-dashboard-pasien">
                            <h5>Antrian</h5>
                            @if ($user->antrian)
                                <span>Nomer {{ $user->antrian->nomor }}</span>
                            @else
                                <span>Tidak Ada</span>
                            @endif
                            <ion-icon name="body-outline"></ion-icon>
                        </div>
                        <div class="card-dashboard-pasien">
                            <h5>Feedback</h5>
                            <span>Berikan Kritik dan Saran</span>
                            <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                        </div>
                    </div>
                </div> 

                <div class="content" id="formAppointmentPasien">
                    <div class="header-dashboard-pasien">
                        <h1>Formulir Pendaftaran</h1>
                        <p>Silahkan masukkan data yang sebenarnya agar dapat melakukan proses buat janji dengan dokter kami.</p>
                    </div>
                    <form class="appointment-pasien" method="POST" action="{{ route('pasienBuatAntrian') }}">
                        @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="nama-field">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ Auth::user()->fullname }}" readonly>
                            </div>
                            <div class="nohp-field">
                                <label for="no_telepon">Nomor Telepon</label>
                                <input type="text" name="no_telepon" placeholder="Nomor Telepon" value="{{ Auth::user()->nohp }}" readonly>
                            </div>
                            <div class="alamat-field">
                                @if ($user->alamat === null)
                                    <a href="#lengkapiAkunPasien" class="sidebar-link" data-target="lengkapiAkunPasien">* lengkapi alamat disini</a>
                                    <input type="text" name="alamat" placeholder="Alamat Belum Ditentukan!" readonly>
                                @else
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" placeholder="Alamat Belum Ditentukan!" value="{{ Auth::user()->alamat }}" readonly>
                                @endif
                            </div>
                            <div class="usia-field">
                                @if ($user->tanggal_lahir === null)
                                    <a href="#lengkapiAkunPasien" class="sidebar-link" data-target="lengkapiAkunPasien">* lengkapi usia disini</a>
                                    <input type="text" name="usia" placeholder="Usia Belum Ditentukan!" readonly>
                                @else
                                    <label for="usia">Usia</label>
                                    <input type="text" name="usia" value="{{ round(\Carbon\Carbon::parse($user->tanggal_lahir)->diffInMonths(\Carbon\Carbon::now()) / 12, 2) }} Tahun" readonly>
                                @endif
                            </div>
                            <div class="jk-field">
                                @if ($user->jenis_kelamin === null)
                                    <a href="#lengkapiAkunPasien" class="sidebar-link" data-target="lengkapiAkunPasien">* lengkapi jenis kelamin disini</a>
                                    <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" readonly>
                                @else
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ Auth::user()->jenis_kelamin }}" readonly>
                                @endif
                            </div>
                            <div class="tanggal-periksa-field">
                                <label for="tanggal_periksa">Tanggal Periksa</label>
                                <input type="date" name="tanggal_periksa" value="{{ old('tanggal_periksa') }}" required>
                            </div>
                            
                            <div class="kondisiGigi-field">
                                <label for="gigi_sakit">Apakah Gigi Anda Sakit?</label>
                                <select name="gigi_sakit">
                                    {{-- <option value="">Apakah Gigi Anda Sakit?</option> --}}
                                    <option value="ya" {{ old('gigi_sakit') == 'ya' ? 'selected' : '' }}>Ya</option>
                                    <option value="tidak" {{ old('gigi_sakit') == 'tidak' ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                            
                            <div class="kondisiGigi-field">
                                <label for="gigi_berdarah"">Apakah Gigi Anda Berdarah?</label>
                                <select name="gigi_berdarah">
                                    {{-- <option value="">Apakah Gusi Anda Berdarah?</option> --}}
                                    <option value="ya" {{ old('gigi_berdarah') == 'ya' ? 'selected' : '' }}>Ya</option>
                                    <option value="tidak" {{ old('gigi_berdarah') == 'tidak' ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                        @endif
                    
                        <div class="tanggal-periksa-field">
                            <label for="tanggal_periksa">Tanggal Periksa</label>
                            <input type="date" name="tanggal_periksa" value="{{ old('tanggal_periksa') }}" required>
                        </div>
                        
                        <div class="kondisiGigi-field">
                            <select name="gigi_sakit">
                                <option value="">Apakah Gigi Anda Sakit?</option>
                                <option value="ya" {{ old('gigi_sakit') == 'ya' ? 'selected' : '' }}>Ya</option>
                                <option value="tidak" {{ old('gigi_sakit') == 'tidak' ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        
                        <div class="kondisiGigi-field">
                            <select name="gigi_berdarah">
                                <option value="">Apakah Gusi Anda Berdarah?</option>
                                <option value="ya" {{ old('gigi_berdarah') == 'ya' ? 'selected' : '' }}>Ya</option>
                                <option value="tidak" {{ old('gigi_berdarah') == 'tidak' ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>


                        <div class="kondisiGigi-field">
                            <label for="pilih_dokter">Pilih Dokter</label>
                            <select class="form-control" type="hidden" id="pilih_dokter" name="pilih_dokter">
                                @foreach($dokters as $pilih_dokter)
                                <option value="{{ $pilih_dokter->fullname }}">dr. {{ $pilih_dokter->fullname }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="kategori-layanan-field">
                            <select class="form-control" id="kategori_layanan" name="kategori_layanan" required>
                                <option value="">Pilih Layanan</option>
                                <option value="Pemeriksaan Gigi dan Mulut" {{ old('kategori_layanan') == 'Pemeriksaan Gigi dan Mulut' ? 'selected' : '' }}>Pemeriksaan Gigi dan Mulut</option>
                                <option value="Scaling Gigi" {{ old('kategori_layanan') == 'Scaling Gigi' ? 'selected' : '' }}>Scaling Gigi</option>
                                <option value="Penambalan Gigi" {{ old('kategori_layanan') == 'Penambalan Gigi' ? 'selected' : '' }}>Penambalan Gigi</option>
                                <option value="Pencabutan Gigi" {{ old('kategori_layanan') == 'Pencabutan Gigi' ? 'selected' : '' }}>Pencabutan Gigi</option>
                                <option value="Pemutihan Gigi" {{ old('kategori_layanan') == 'Pemutihan Gigi' ? 'selected' : '' }}>Pemutihan Gigi</option>
                                <option value="Pemasangan Behel" {{ old('kategori_layanan') == 'Pemasangan Behel' ? 'selected' : '' }}>Pemasangan Behel</option>
                                <option value="Pemasangan Crown Gigi" {{ old('kategori_layanan') == 'Pemasangan Crown Gigi' ? 'selected' : '' }}>Pemasangan Crown Gigi</option>
                                <option value="Konsultasi Ortodonti" {{ old('kategori_layanan') == 'Konsultasi Ortodonti' ? 'selected' : '' }}>Konsultasi Ortodonti</option>
                                <option value="Konsultasi Implan Gigi" {{ old('kategori_layanan') == 'Konsultasi Implan Gigi' ? 'selected' : '' }}>Konsultasi Implan Gigi</option>
                                <option value="Operasi Gigi Bungsu" {{ old('kategori_layanan') == 'Operasi Gigi Bungsu' ? 'selected' : '' }}>Operasi Gigi Bungsu</option>
                                <option value="Fluoridasi" {{ old('kategori_layanan') == 'Fluoridasi' ? 'selected' : '' }}>Fluoridasi</option>
                            </select>
                        </div>

                            @if ($user->alamat || $user->usia || $user->jenis_kelamin === null)
                                <div class="tombol-appointment">
                                    <a href="#lengkapiAkunPasien" class="sidebar-link" data-target="lengkapiAkunPasien">
                                    <button type="button">Lengkapi Informasi Akun Anda Terlebih Dahulu</button>
                                    </a>
                                </div>
                            @else
                                <div class="tombol-appointment">
                                    <button type="submit">Kirim</button>
                                </div>
                            @endif
                            
                    </form>
                    
                </div>

                <div class="content" id="antrianPasien">
                    <h1>Antrian</h1>
                    @foreach($antrianku as $antrianku)
                    @if($antrianku) <!-- Pengecekan apakah pengguna memiliki antrian -->
                        <table class="appointment-results">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $user->fullname }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td>{{ $user->nohp }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $user->alamat }}</td>
                            </tr>
                            <!-- {{-- <tr>
                                <th>Usia</th>
                                <td>{{ \Carbon\Carbon::parse($user->tanggal_lahir)->diffInYears(\Carbon\Carbon::now()) }} tahun</td>
                            </tr> --}} -->
                            <tr>
                                <th>Usia</th>
                                <td>{{ round(\Carbon\Carbon::parse($user->tanggal_lahir)->diffInMonths(\Carbon\Carbon::now()) / 12, 2) }} tahun</td>
                            </tr>
                            
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $user->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Periksa</th>
                                <td>{{ $antrianku->tanggal_periksa }}</td> <!-- Menampilkan tanggal periksa dari antrian -->
                            </tr>
                            <tr>
                                <th>Nomer Antrian</th>
                                <td>{{ $user->antrian->nomor }}</td> <!-- Menampilkan tanggal periksa dari antrian -->
                            </tr>
                            <tr>
                                <th>Jam</th>
                                <td>{{ $antrianku->waktu }}</td> <!-- Menampilkan jam dari antrian -->
                            </tr>
                            <tr>
                                <th>Layanan</th>
                                <td>{{ $antrianku->kategori_layanan }}</td> <!-- Menampilkan kategori layanan dari antrian -->
                            </tr>
                        </table>
                    @else
                        <p>Anda Belum Memiliki Antrian Hari ini.</p>
                    @endif
                    @endforeach
                </div>
                
                <div class="content" id="akunPasien">
                    <div class="header-dashboard-pasien">
                        <h1>Informasi Akun</h1>
                        <p>Kelola Informasi Akun Dental Care Anda </p>
                    </div>
                    <div class="card-dashboard">
                        <div class="card-dashboard-pasien">
                            <h5>Username</h5>
                            <span>{{ $user->username }}</span>
                            <ion-icon name="person-outline"></ion-icon>
                        </div>
                        <div class="card-dashboard-pasien">
                            <h5>Fullname</h5>
                            <span>{{ $user->fullname }}</span>
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </div>
                        <div class="card-dashboard-pasien">
                            <h5>Nomer Telepon</h5>
                            <span>{{ $user->nohp }}</span>
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <div class="card-dashboard-pasien">
                            <h5>Password</h5>
                            <span>Reset Password?</span>
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </div>
                        <div class="card-dashboard-pasien">
                            <h5>Usia</h5>
                            <span>{{ round(\Carbon\Carbon::parse($user->tanggal_lahir)->diffInMonths(\Carbon\Carbon::now()) / 12, 2) }} Tahun</span>
                            <ion-icon name="calendar-number-outline"></ion-icon>
                        </div>
                        <div class="card-dashboard-pasien">
                            <h5>Jenis Kelamin</h5>
                            @if ($user->jenis_kelamin === 'laki-laki')
                                <span>{{ $user->jenis_kelamin }}</span>
                                <ion-icon name="male-outline"></ion-icon>
                            @else
                                <span>{{ $user->jenis_kelamin }}</span>
                                <ion-icon name="female-outline"></ion-icon>
                            @endif
                        </div>
                        <div class="card-dashboard-pasien">
                            <h5>Alamat</h5>
                            <span>{{ $user->alamat }}</span>
                            <ion-icon name="planet-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="content" id="lengkapiAkunPasien">
                    <div class="header-dashboard-pasien">
                        <h1>Update Akun Dental Care</h1>
                        <p>Halaman Ini Digunakan Untuk Mengupdate Akun Dental Care Anda</p>
                    </div>
                    
                    <form class="lengkapi-akun-pasien" id="lengkapiAkunPasien" method="POST" action="{{ route('updateAkunPasien.update', $user->id) }}" enctype="multipart/form-data">
                        
                        @csrf
                        @method('PUT')

                        <div class="foto-profil-field">
                            <label for="photo">Foto Profil</label>
                            <input type="file" name="photo" value="{{ Auth::user()->image}}">
                        </div>

                        <div class="alamat-field">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" placeholder="Alamat" class="@error('alamat') is-invalid @enderror"  value="{{  $user->alamat ? $user->alamat : '' }}" autocomplete="off">

                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>  
                            @enderror
                        </div>

                        <div class="jenis-kelamin-field">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" value="{{ Auth::user()->jenis_kelamin }}>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki" {{ $user->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ $user->jenis_kelamin == 'laki-laki' ? '' : 'selected' }}>Perempuan</option>
                            </select>
                        </div>

                        <div class="tanggal-lahir-field">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ $user->tanggal_lahir ? $user->tanggal_lahir : '' }}" class="@error('tanggal_lahir') is-invalid @enderror" " autocomplete="off">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="tombol-update">
                            <button type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<script src="{{ asset ('/js/dashboardPasien.js')}}"></script>

</body>
</html>