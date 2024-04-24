<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | jadwal dokter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/datadok.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content">
        <div class="itemcontent">
            <div class="datadokter">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>No HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach($dokters as $dokter)
                        
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td><img class="imagedok" src="{{ $dokter->image }}" alt=""></td>
                                <td>{{ $dokter->username }}</td>
                                <td>dr. {{ $dokter->fullname }}</td>
                                <td>{{ $dokter->nohp }}</td>
                                <td class="aksi">
                                    <button onclick="editDataDokter('{{ $dokter->id  }}', '{{$dokter->username}}', '{{$dokter->fullname}}', '{{$dokter->nohp }}', event)" class="green">Edit</button>
                                    <button class="red" onclick="terimaHapusId({{ $dokter->id }}, event)">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="crud">
                <button class="blue" onclick="kelolaDokter(event)">Daftarkan</button>
            </div>
        </div>
    </div>

    @include('admin.cruddokter.tambahdokter')
    @include('admin.cruddokter.hapusdokter')
    @include('admin.cruddokter.editdokter')

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu9')
        })
        // TAMBAH DOKTER
        function kelolaDokter (e) {
            e.preventDefault()
            const klikAdmin = document.getElementById('pendaftarandokter')
            klikAdmin.classList.add('geserkan')
        }
        function batalKelolaDokter (e) {
            e.preventDefault()
            const klikAdmin = document.getElementById('pendaftarandokter')
            klikAdmin.classList.remove('geserkan')
        }

        // HAPUS DOKTER
        var penghapusanDokter = ':id'
        function terimaHapusId (hapusId, event) {
            event.preventDefault()

            const klikAdmin = document.getElementById('hapusdokter')
            klikAdmin.classList.add('geserkan')

            var aksiHapus = document.getElementById('hapusdokterform').getAttribute('action').replace(penghapusanDokter, hapusId)
            penghapusanDokter = hapusId
            document.getElementById('hapusdokterform').setAttribute('action', aksiHapus)
        }
        function batalHapus (event) {
            event.preventDefault()

            const klikAdmin = document.getElementById('hapusdokter')
            klikAdmin.classList.remove('geserkan')

            var aksiHapus = document.getElementById('hapusdokterform').getAttribute('action').replace(penghapusanDokter, ':id')
            penghapusanDokter = ':id'
            document.getElementById('hapusdokterform').setAttribute('action', aksiHapus)
        }

        // EDIT DOKTER
        var pengeditanDokter = ':id'
        function editDataDokter (editId, username, fullname, nohp, event) {
            event.preventDefault()
            const klikAdmin = document.getElementById('editdatadokter')
            klikAdmin.classList.add('geserkan')

            document.getElementById('editNama').value = username
            document.getElementById('editFullname').value = fullname
            document.getElementById('editNoHP').value = nohp

            var aksiEdit = document.getElementById('editdataform').getAttribute('action').replace(pengeditanDokter, editId)
            pengeditanDokter = editId
            document.getElementById('editdataform').setAttribute('action', aksiEdit)
        }
        function batalEditDataDokter (event) {
            event.preventDefault()
            const klikAdmin = document.getElementById('editdatadokter')
            klikAdmin.classList.remove('geserkan')

            var aksiEdit = document.getElementById('editdataform').getAttribute('action').replace(pengeditanDokter, ':id')
            pengeditanDokter = ':id'
            document.getElementById('editdataform').setAttribute('action', aksiEdit)
        }
    </script>    
</body>
</html>