<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | Stok Obat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/admin/stokobat.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/admin/datadok.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content">
        <div class="itemcontent">
            <div class="datadokter">
                <table>
                    <thead style="font-size: 13px;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Obat</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Supplier</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 12px;">
                        @php
                            $count = 1;
                        @endphp
                        @foreach($obat as $obatz)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $obatz->nama_obat }}</td>
                            <td>{{ $obatz->jenis_obat }}</td>
                            <td>{{ $obatz->jumlah }}</td>
                            <td>{{ $obatz->satuan }}</td>
                            <td>Rp. {{ $obatz->harga_satuan }}</td>
                            <td>{{ $obatz->tanggal_kadaluarsa }}</td>
                            <td>{{ $obatz->supplier }}</td>
                            <td>{{ $obatz->keterangan }}</td>
                            <td class="aksi">                                               
                                <button class="green" onclick="editDataDokter('{{ $obatz->id  }}', '{{ $obatz->nama_obat }}', '{{ $obatz->jenis_obat }}', '{{ $obatz->jumlah }}', '{{ $obatz->satuan }}', '{{ $obatz->harga_satuan }}', '{{ $obatz->tanggal_kadaluarsa }}', '{{ $obatz->supplier }}', '{{ $obatz->keterangan }}', event)">Edit</button>
                                <button class="red" onclick="terimaHapusId({{ $obatz->id }}, event)">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="crud">
                <button class="blue" onclick="kelolaObat(event)">Tambah</button>
            </div>
        </div>
    </div>

    @include('admin.crudobat.tambahObat')
    @include('admin.crudobat.hapusObat')
    @include('admin.crudobat.editObat')

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu4')
        })

        // TAMBAH OBAT
        function kelolaObat (e) {
            e.preventDefault()
            const klikAdmin = document.getElementById('pendaftarandokter')
            klikAdmin.classList.add('geserkan')
        }
        function batalKelolaObat (e) {
            e.preventDefault()
            const klikAdmin = document.getElementById('pendaftarandokter')
            klikAdmin.classList.remove('geserkan')
        }

        // HAPUS Obat
        var penghapusanObat = ':id'
        function terimaHapusId (hapusId, event) {
            event.preventDefault()

            const klikAdmin = document.getElementById('hapusdokter')
            klikAdmin.classList.add('geserkan')

            var aksiHapus = document.getElementById('hapusdokterform').getAttribute('action').replace(penghapusanObat, hapusId)
            penghapusanObat = hapusId
            document.getElementById('hapusdokterform').setAttribute('action', aksiHapus)
        }
        function batalHapus (event) {
            event.preventDefault()

            const klikAdmin = document.getElementById('hapusdokter')
            klikAdmin.classList.remove('geserkan')

            var aksiHapus = document.getElementById('hapusdokterform').getAttribute('action').replace(penghapusanObat, ':id')
            penghapusanObat = ':id'
            document.getElementById('hapusdokterform').setAttribute('action', aksiHapus)
        }

        // EDIT OBAT
        var pengeditanObat = ':id'
        function editDataDokter (editId , nama_obat, jenis_obat, jumlah, satuan, harga_satuan, tanggal_kadaluarsa, supplier, keterangan, event) {
            event.preventDefault()
            const klikAdmin = document.getElementById('editdataobat')
            klikAdmin.classList.add('geserkan')

            document.getElementById('nama_obat').value = nama_obat
            document.getElementById('jenis_obat').value = jenis_obat
            document.getElementById('jumlah').value = jumlah
            document.getElementById('satuan').value = satuan
            document.getElementById('harga_satuan').value = harga_satuan
            document.getElementById('tanggal_kadaluarsa').value = tanggal_kadaluarsa
            document.getElementById('supplier').value = supplier
            document.getElementById('keterangan').value = keterangan

            var aksiEdit = document.getElementById('editdataform').getAttribute('action').replace(pengeditanObat, editId)
            pengeditan = editId
            document.getElementById('editdataform').setAttribute('action', aksiEdit)
        }
        function batalEditDataDokter (event) {
            event.preventDefault()
            const klikAdmin = document.getElementById('editdataobat')
            klikAdmin.classList.remove('geserkan')

            var aksiEdit = document.getElementById('editdataform').getAttribute('action').replace(pengeditanObat, ':id')
            pengeditan = ':id'
            document.getElementById('editdataform').setAttribute('action', aksiEdit)
        }
    </script>
</body>
</html>
