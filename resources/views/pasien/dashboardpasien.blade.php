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
                            <p>Tidak Ada</p>
                            <ion-icon name="body-outline"></ion-icon>
                        </div>
                        <div class="card4">
                            <h5>Feedback</h5>
                            <p>Berikan Kritik dan Saran</p>
                            <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                {{-- <div class="content" id="formAppointmentPasien">
                    <h1>Formulir Pendaftaran</h1>
                    <p>Silahkan masukkan data yang sebenarnya agar dapat melakukan proses buat janji dengan dokter kami.</p>
                    <form class="appointment-pasien" method="POST" action="{{ route('pasienBuatAntrian') }}">
                      @csrf
                      <div class="nama-field">
                          <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ ($antrian->nama) }}">
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
                      <div class="tombol-appointment">
                          <button type="submit">Kirim</button>
                      </div>
                  </form>
                </div> --}}


                <div class="content" id="formAppointmentPasien">
                    <h1>Formulir Pendaftaran</h1>
                    <p>Silahkan masukkan data yang sebenarnya agar dapat melakukan proses buat janji dengan dokter kami.</p>
                    {{-- <form class="appointment-pasien" method="POST" action="{{ route('pasienBuatAntrian') }}">
                        @csrf
                        @if (Auth::check() && Auth::user()->Authorize !== 'Admin')

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="nama-field">
                                <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ Auth::user()->fullname }}" readonly>
                            </div>
                            <div class="nohp-field">
                                <input type="text" name="no_telepon" placeholder="Nomor Telepon" value="{{ Auth::user()->nohp }}" readonly>
                            </div>
                            <div class="alamat-field">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" placeholder="Alamat" value="{{ Auth::user()->alamat }}" readonly>
                            </div>
                            <div class="usia-field">
                                <label for="usia">Usia</label>
                                <input type="text" name="usia" placeholder="Usia" value="{{ \Carbon\Carbon::parse(Auth::user()->tanggal_lahir)->age }}" readonly>
                            </div>
                            <div class="jk-field">
                                <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ Auth::user()->jenis_kelamin }}" readonly>
                            </div>
                        @else

                            <div class="nama-field">
                                <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                            </div>
                            <div class="nohp-field">
                                <input type="text" name="no_telepon" placeholder="Nomor Telepon" value="{{ old('no_telepon') }}">
                            </div>
                            <div class="alamat-field">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                            </div>
                            <div class="usia-field">
                                <label for="usia">Usia</label>
                                <input type="text" name="usia" placeholder="Usia" value="{{ old('usia') }}">
                            </div>
                            <div class="jk-field">
                                <select name="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        @endif
                
                        <div class="tanggal-periksa-field">
                            <label for="tanggal_periksa">Tanggal Periksa</label>
                            <input type="date" name="tanggal_periksa" value="{{ old('tanggal_periksa') }}">
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
                
                        <div class="kategori-layanan-field">
                            <select class="form-control" id="kategori_layanan" name="kategori_layanan">
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
                
                        <div class="tombol-appointment">
                            <button type="submit">Kirim</button>
                        </div>
                    </form> --}}

                    <form class="appointment-pasien" method="POST" action="{{ route('pasienBuatAntrian') }}">
                        @csrf
                        @if (Auth::check() && Auth::user()->Authorize !== 'Admin')
                            {{-- Data diisi otomatis untuk user yang terdaftar --}}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="nama-field">
                                <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ Auth::user()->fullname }}" readonly>
                            </div>
                            <div class="nohp-field">
                                <input type="text" name="no_telepon" placeholder="Nomor Telepon" value="{{ Auth::user()->nohp }}" readonly>
                            </div>
                            <div class="alamat-field">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" placeholder="Alamat" value="{{ Auth::user()->alamat }}" readonly>
                            </div>
                            <div class="usia-field">
                                <label for="usia">Usia</label>
                                <input type="text" name="usia" placeholder="Usia" value="{{ round(\Carbon\Carbon::parse($user->tanggal_lahir)->diffInMonths(\Carbon\Carbon::now()) / 12, 2) }} Tahun" readonly>

                                {{-- <td>{{ round(\Carbon\Carbon::parse($user->tanggal_lahir)->diffInMonths(\Carbon\Carbon::now()) / 12, 2) }} tahun</td> --}}
                            </div>
                            <div class="jk-field">
                                <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ Auth::user()->jenis_kelamin }}" readonly>
                            </div>
                        @else
                            {{-- Data diisi manual untuk user yang tidak terdaftar atau admin --}}
                            <div class="nama-field">
                                <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                            </div>
                            <div class="nohp-field">
                                <input type="text" name="no_telepon" placeholder="Nomor Telepon" value="{{ old('no_telepon') }}">
                            </div>
                            <div class="alamat-field">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                            </div>
                            <div class="usia-field">
                                <label for="usia">Usia</label>
                                <input type="text" name="usia" placeholder="Usia" value="{{ old('usia') }}">
                            </div>
                            <div class="jk-field">
                                <select name="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
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

                        <div class="tombol-appointment">
                            <button type="submit">Kirim</button>
                        </div>
                    </form>
                    
                </div>
                


                {{-- <div class="content" id="antrianPasien">
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
                </div> --}}


                <div class="content" id="antrianPasien">
                    <h1>Antrian</h1>
                    @foreach($antrianku as $antrianku)
                    @if($antrianku) <!-- Pengecekan apakah pengguna memiliki antrian -->
                        <table class="appointment-results">
                            <tr>
                                <th>Nama Lengkap</th>
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
                                <th>Jam</th>
                                <td>{{ $antrianku->waktu }}</td> <!-- Menampilkan jam dari antrian -->
                            </tr>
                            <tr>
                                <th>Layanan</th>
                                <td>{{ $antrianku->kategori_layanan }}</td> <!-- Menampilkan kategori layanan dari antrian -->
                            </tr>
                        </table>
                    @else
                        <p>Tidak ada antrian yang tersedia untuk pengguna ini.</p>
                    @endif
                    @endforeach
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

                <div class="content" id="lengkapiAkunPasien"> 
                    <h1>Update Akun Dental Care</h1>
                    <p>Halaman Ini Digunakan Untuk Mengupdate Akun Dental Care Anda</p>
                    <form class="lengkapi-akun-pasien" id="lengkapiAkunPasien" method="POST" action="{{ route('updateAkunPasien.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="foto-profil-field">
                            <label for="photo">Foto Profil</label>
                            <input type="file" name="photo">
                        </div>

                        <div class="alamat-field">
                            <input type="text" name="alamat" placeholder="Alamat" class="@error('alamat') is-invalid @enderror"  value="{{  $user->alamat ? $user->alamat : '' }}" autocomplete="off">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>  
                            @enderror
                        </div>

                        <div class="jenis-kelamin-field">
                            <select name="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki" {{ $user->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ $user->jenis_kelamin == 'laki-laki' ? '' : 'selected' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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