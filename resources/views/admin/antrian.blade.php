<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | jadwal dokter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/antrian.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content">
        <div class="contain">
        <h1 class="judul">Antrian Pasien</h1>
        {{-- <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
        <input type="text" id="searchInput" class="form-control" placeholder="Cari nama atau layanan...">
        </div> --}}
        
        <div id="notificationArea" class="pt-3 sukses">
        <!-- Notifikasi sukses akan ditambahkan di sini menggunakan JavaScript -->
        </div>
        </div>
<div class="row util">
<div class="col-1">
{{-- <a href="{{ route('admin.formpasien'); }}" class="tombol-tambah">+ Tambah Antrian</a> --}}
<div class="input-group mb-3">
    <span class="input-group-text tmb" id="basic-addon1"><a href="{{ route('admin.formpasien'); }}"><i class="fas fa-plus"></i> Tambah</a></span>
</div>
</div>
<div class="col-11">
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
    <input type="text" id="searchInput" class="form-control" placeholder="Cari nama atau layanan...">
    </div>
</div>
</div>
    <div class="table-responsive isi-table">
  <table id="antrianTable" class="table table-striped table-bordered table-hover">
    <thead>
      <tr style="background-color: #4682B4; color: white;">
        <th scope="col" class="tl">Nama</th>
        <th scope="col">Layanan</th>
        <th scope="col">No Antrian</th>
        <th scope="col">Tanggal Periksa</th>
        <th scope="col">Waktu</th>
        <th scope="col" class="col-md-1 tr">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $antrian)
        <tr>
          <td class="kolom-nama">{{ $antrian->nama }}</td>
          <td class="kolom-layanan">{{ $antrian->kategori_layanan }}</td>
          <td>{{ $antrian->nomor }}</td>
          <td>{{ $antrian->tanggal_periksa }}</td>
          <td>{{ $antrian->waktu instanceof \Carbon\Carbon ? $antrian->waktu->format('H:i') : $antrian->waktu }}</td>
          <td class="text-center">
            <div class="btn-group">
                <a href="{{ route('antrian.edit', $antrian->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm" onclick="hapusById({{ $antrian->id }}, '{{$antrian->nama}}', '{{$antrian->kategori_layanan}}', event)">Hapus</button>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

    </div>
@include('admin.crudantrian.hapusantrian')

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu6')
        })
//-- Fungsi Fitur Search --
        // Ambil elemen input teks pencarian
        const searchInput = document.getElementById('searchInput');
        // Ambil semua baris tabel
        const rows = document.querySelectorAll('#antrianTable tbody tr');
        // Tambahkan event listener untuk input teks pencarian
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase(); // Ambil teks pencarian dan ubah menjadi lowercase
            // Iterasi melalui setiap baris tabel
            rows.forEach(row => {
                const nama = row.querySelector('.kolom-nama').textContent.toLowerCase(); // Ambil teks nama dan ubah menjadi lowercase
                const layanan = row.querySelector('.kolom-layanan').textContent.toLowerCase(); // Ambil teks layanan dan ubah menjadi lowercase
                // Jika teks nama atau layanan mengandung teks pencarian, tampilkan baris; jika tidak, sembunyikan baris
                if (nama.includes(searchTerm) || layanan.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

//-- Fungsi Notifikasi Sukses --
        document.addEventListener("DOMContentLoaded", function() {
        var successMessage = "{{ session('success') }}";
        if (successMessage) {
            var notificationArea = document.getElementById('notificationArea');
            var successDiv = document.createElement('div');
            successDiv.classList.add('alert', 'alert-success');
            successDiv.textContent = successMessage;
            notificationArea.appendChild(successDiv);

            // Tambahkan event listener untuk menghapus notifikasi ketika diklik
            successDiv.addEventListener('click', function() {
                successDiv.classList.add('removing');
                setTimeout(function() {
                    successDiv.remove();
                }, 500);;
            });
        }
        });

//-- Fungsi Popup Hapus --
        var penghapusanAntrian = ''
        function hapusById (hapusId, nama, layanan, event) {
            //INI BISAAA!!!!
//           event.preventDefault()

            const klikAdmin = document.getElementById('hapusantrian')
            klikAdmin.classList.add('geserkan')

            // Simpan ID yang akan dihapus ke variabel penghapusanAntrian
            penghapusanAntrian = hapusId;

            document.getElementById('namaAntrian').innerText = nama;
            document.getElementById('layananAntrian').innerText = layanan;

            var actionHapus = '{{ route("antrian.destroy", ":id") }}';
            actionHapus = actionHapus.replace(':id', hapusId);
            document.getElementById('hapusantrianform').setAttribute('action', actionHapus);
        }
        function batalHapus (event) {
            //INI BISA!!!!!
            event.preventDefault()

            const klikAdmin = document.getElementById('hapusantrian')
            klikAdmin.classList.remove('geserkan')

            // Reset variabel penghapusanAntrian/            
            penghapusanAntrian = '';

            var actionHapus = '{{ route("antrian.destroy", ":id") }}';
            actionHapus = actionHapus.replace(':id', ':id');
            document.getElementById('hapusantrianform').setAttribute('action', actionHapus);
        }

        // Ambil elemen notifikasi
        var notificationArea = document.getElementById('notificationArea');

        // Tambahkan kelas 'show' setelah beberapa waktu
        setTimeout(function() {
            notificationArea.classList.add('show');
        }, 100);

        
    </script>
</body>
</html>