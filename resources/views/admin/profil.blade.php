<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/profile.css') }}">
    <style>
        a {
            left: -100px;
        }
        ul,li {
            padding-left: 0;
        }
    </style>
</head>
<body>
    @include('admin.component.navbar');
    
<div id="content" class="content container-fluid">
        <!-- Halaman Profil -->
    
  <div class="container-fluid p-5 haloh">
    <div id="profil" class="row justify-content-center no-gutters">
      <div class="col col-md-5">
        <div class="profile-card text-center p-5 first">
          <img src="{{ $user->image }}" alt="Profile Picture" class="profile-picture mb-3">
          <h2 class="mb-3">{{ $user->fullname }}</h2>
          <p class="lead"><p>{{ $user->tanggal_lahir }}</p></p>
          <ul class="list-inline">
            <a href="#"><li class="fab fa-facebook"></li></a>
            <a href="#"><li class="fab fa-instagram"></li></a>
          </ul>
        </div>
      </div>
      <div class="col col-md-5">
        <div class="profile-card text-start p-5 second">
          <h6>Jenis Kelamin</h6>
          <p>{{ $user->jenis_kelamin}}</p>
          <h6>Riwayat Pendidikan</h6>
          @if($user->riwayat_pendidikan)
              <?php $pendidikan = json_decode($user->riwayat_pendidikan, true); ?>
              @foreach($pendidikan as $items)
                  <p>- {{ $items }}</p>
              @endforeach
          @else
              <p>Tidak ada pengalaman yang tersedia.</p>
          @endif
          <h6>Email</h6>
          <p>{{ $user->email }}</p>
          <h6>No Telepon</h6>
          <p>+62 {{ $user->nohp }}</p>
          <h6>Alamat</h6>
          <p>{{ $user->alamat }}</p>
        </div>
      </div>
      <div class="col col-md-2">
        <div class="profile-card text-start p-5 third">
            <button id="editButton" class="btn btn-primary">Edit Profil</button>
        </div>
      </div>
    </div>

    <form id="edit" class="row justify-content-center no-gutters sembunyikan" method="POST" action="{{ route('admin.profil.update', ['id' => $user->id]) }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="idadmin" value="{{ $user->id }}">
      <div class="col col-md-5">
        <div class="profile-card text-start p-5 first">
          <div class="form-group">
            <label for="gambar">Gambar Profil</label>
            <input type="file" class="form-control-file" id="gambar" name="image">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{ $user->fullname }}">
          </div>
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="telepon">No Telepon</label>
            <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="No Telepon" value="{{ $user->nohp }}">
          </div>

        </div>
      </div>
      <div class="col col-md-7">
        <div class="profile-card text-start p-5 second">
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
              <option value="">Pilih Jenis Kelamin</option>
              <option value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
              <option value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            {{-- <input type="text" class="form-control mb-2" name="jenis_kelamin" value="{{ $user->jenis_kelamin }}" placeholder="Jenis Kelamin"> --}}
          </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
    <label for="pendidikan">Riwayat Pendidikan</label>
    <div id="pendidikanContainer">
        @php
            // Cek apkh $profil->pendidikan adalah string atau array
            if (is_string($user->riwayat_pendidikan)) {
                $pendidikanArray = json_decode($user->riwayat_pendidikan);
            } elseif (is_array($user->riwayat_pendidikan)) {
                $pendidikanArray = $user->riwayat_pendidikan;
            } else {
                $pendidikanArray = [];
            }

            $jumlahPendidikan = count($pendidikanArray);
        @endphp

        @foreach ($pendidikanArray as $pendidikan)
        <div class="form-group d-flex align-items-center posisifix">
            <input type="text" class="form-control mb-2" name="pendidikan[]" value="{{ $pendidikan }}" placeholder="Riwayat Pendidikan">
            <button type="button" class="btn btn-danger btn-sm remove-pendidikan">-</button>
          </div>
        @endforeach
    </div>
    <button type="button" id="tambahPendidikan" class="btn btn-secondary mt-3">+ Pendidikan</button>
          </div>
          </div>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat">{{ $user->alamat }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>

  </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
  activeMenu('menu2')
})

    document.getElementById('editButton').addEventListener('click', function() {
      var profilElement = document.getElementById('profil');
      var formEditElement = document.getElementById('edit');

      profilElement.classList.toggle('sembunyikan');
      formEditElement.classList.toggle('sembunyikan');
    });

// hapus input pendidikaaan
document.addEventListener('click', function(event) {
  if (event.target.classList.contains('remove-pendidikan')) {
        event.target.parentElement.remove();
  }
});
// Fungsi untuk menambah input pengalaman saat tombol tambah ditekan
document.getElementById('tambahPendidikan').addEventListener('click', function() {
    tambahkanInputPendidikan();
});

var existingPendidikan = {!! json_encode($user->riwayat_pendidikan) !!};
if (existingPendidikan) {
    existingPendidikan = JSON.parse(existingPendidikan);
}

// Ambil container untuk input pendidikan
var pendidikanContainer = document.getElementById('pendidikanContainer');

document.getElementById('tambahPendidikan').addEventListener('click', function() {
    var pendidikanContainer = document.getElementById('pendidikanContainer');
    var inputBaru = document.createElement('input');
    inputBaru.setAttribute('type', 'text');
    inputBaru.setAttribute('class', 'form-control mb-2');
    inputBaru.setAttribute('placeholder', 'Riwayat Pendidikan');
    inputBaru.setAttribute('name', 'pendidikan[]');
    pendidikanContainer.appendChild(inputBaru);
});
    </script>
</body>
