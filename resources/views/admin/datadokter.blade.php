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
    <div id="content" class="content contentzz">
        <div class="itemcontent">
            <input class="caridokterzz" type="text" id="cariDokter" placeholder="Cari berdasarkan Nama Lengkap atau Username" onkeyup="cariDataDokter()">
            <div class="datadokter">
                <table id="tablesss">
                    <thead>
                        <tr>
                            <th style="border-top-left-radius: 20px;">No</th>
                            <th>Foto</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Selengkapnya</th>
                            <th style="border-top-right-radius: 20px;">Aksi</th>
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
                                <td>
                                    <button class="btnjaditext" onclick="tampilkanDataDokter('{{ $dokter->id  }}', '{{$dokter->username}}', '{{$dokter->fullname}}', '{{$dokter->nohp }}', '{{$dokter->riwayat_pendidikan }}', '{{$dokter->alamat }}', '{{$dokter->email }}', '{{$dokter->jenis_kelamin }}', '{{$dokter->tanggal_lahir }}', '{{$dokter->image }}', event)">Lihat Detail Data</button>
                                </td>
                                <td class="aksi">
                                    <button onclick="editDataDokter('{{ $dokter->id  }}', '{{$dokter->username}}', '{{$dokter->fullname}}', '{{$dokter->nohp }}', '{{$dokter->riwayat_pendidikan }}', '{{$dokter->alamat }}', '{{$dokter->email }}', '{{$dokter->jenis_kelamin }}', '{{$dokter->tanggal_lahir }}', event)" class="green">Edit</button>
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
    @include('admin.cruddokter.tampildok')

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu9')
        })

        // cari data dokter
        function cariDataDokter () {
            let input, filter, table, tr, tdName, tdUsername, i, txtValueName, txtValueUsername
            input = document.getElementById('cariDokter')
            filter = input.value.toUpperCase();
            table = document.getElementById('tablesss')
            tr = table.getElementsByTagName("tr")
            for (i = 0; i < tr.length; i++) {
                tdName = tr[i].getElementsByTagName("td")[3]
                tdUsername = tr[i].getElementsByTagName("td")[2]
                if (tdName && tdUsername) {
                    txtValueName = tdName.textContent || tdUsername.textContent
                    txtValueUsername = tdUsername.textContent || tdName.textContent
                    if (txtValueName.toUpperCase().indexOf(filter) > -1 || txtValueUsername.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = ""
                    } else {
                        tr[i].style.display = "none"
                    }
                }
            }
        }

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
        function editDataDokter (editId, username, fullname, nohp, riwayat_pendidikan, alamat, email, jenis_kelamin, tanggal_lahir, event) {
            event.preventDefault()
            const klikAdmin = document.getElementById('editdatadokter')
            klikAdmin.classList.add('geserkan')

            document.getElementById('editNama').value = username
            document.getElementById('editFullname').value = fullname
            document.getElementById('editNoHP').value = nohp
            document.getElementById('editAlamat').value = alamat
            document.getElementById('editEmail').value = email
            document.getElementById('editRiwayat_pendidikan').value = riwayat_pendidikan
            document.getElementById('editTanggalLahir').value = tanggal_lahir

            if (jenis_kelamin == "laki-laki") {
                document.getElementById('editJenis1').checked = true
            } else if (jenis_kelamin == "perempuan") {
                document.getElementById('editJenis2').checked = true
            }

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

        // tampilkan dokter
        function tampilkanDataDokter(idDokter, username, fullname, nohp, riwayat_pendidikan, alamat, email, jenis_kelamin, tanggal_lahir, imagedok, event) {
            event.preventDefault()
            const klikAdmin = document.getElementById('tampillahdok')
            klikAdmin.classList.add('geserkan')

            document.getElementById('txtUsername').innerHTML = username
            document.getElementById('txtNama').innerHTML = fullname
            document.getElementById('txtNoHP').innerHTML = nohp
            document.getElementById('txtAlamat').innerHTML = alamat
            document.getElementById('txtEmail').innerHTML = email
            document.getElementById('txtRiwayat_pendidikan').innerHTML = riwayat_pendidikan
            document.getElementById('txtTanggalLahir').innerHTML = tanggal_lahir
            document.getElementById('txtJK').innerHTML = jenis_kelamin
            document.getElementById('txtImage').src = imagedok
        }
        function selesaiTampilDok(event) {
            event.preventDefault()
            const klikAdmin = document.getElementById('tampillahdok')
            klikAdmin.classList.remove('geserkan')
        }
    </script>
</body>
</html>