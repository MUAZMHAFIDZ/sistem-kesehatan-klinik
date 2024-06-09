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
            <div class="btndownload">
                <button class="blue" style="padding: 10px; margin-top: 20px; cursor: pointer;"><a style="color: white; text-decoration: none;" href="{{ route('rekammedis.pdf') }}"><i class="fa-solid fa-download"></i> Minggu ini</a></button>
                <button class="blue" style="padding: 10px; margin-top: 20px; cursor: pointer;"><a style="color: white; text-decoration: none;" href="{{ route('rekammedislalu.pdf') }}"><i class="fa-solid fa-download"></i> Minggu ini dan Minggu Sebelumnya</a></button>
            </div>
            <input class="caridokterzz" type="text" id="cariDokter" placeholder="Cari berdasarkan Nama Dokter atau Pasien" onkeyup="cariData()">
            <div class="datadokter">
                <table id="tablesss">
                    <thead>
                        <tr>
                            <th style="border-top-left-radius: 20px;">No</th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Layanan</th>
                            <th>Diagnosa</th>
                            <th>Jumlah Kunjungan Dalam Seminggu</th>
                            <!-- <th style="border-top-right-radius: 20px;">Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach($rekammedis as $rekammedis)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $count++ }}</td>
                                <td>{{ $rekammedis->antrian->nama }}</td>
                                <td>{{ $rekammedis->antrian->nama_dokter }}</td>
                                <td>{{ $rekammedis->antrian->tanggal_periksa }}</td>
                                <td>{{ $rekammedis->antrian->kategori_layanan }}</td>
                                <td>{{ $rekammedis->diagnosa }}</td>
                                <!-- <td class="aksi">
                                    <button class="red">Hapus</button>
                                </td> -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu4')
        })

        function cariData() {
            let input, filter, table, tr, tdName, tdUsername, i, txtValueName, txtValueUsername
            input = document.getElementById('cariDokter')
            filter = input.value.toUpperCase();
            table = document.getElementById('tablesss')
            tr = table.getElementsByTagName("tr")
            for (i = 0; i < tr.length; i++) {
                tdName = tr[i].getElementsByTagName("td")[2]
                tdUsername = tr[i].getElementsByTagName("td")[1]
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
    </script>
</body>
</html>