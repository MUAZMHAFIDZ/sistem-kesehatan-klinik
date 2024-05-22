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
            <input class="caridokterzz" type="text" id="cariDokter" placeholder="Cari berdasarkan Nama" onkeyup="cariDataDokter()">
            <div class="datadokter">
                <table  id="tablesss">
                    <thead>
                        <tr>
                            <th style="border-top-left-radius: 20px;">No</th>
                            <th>Nama</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                            <th>Sabtu</th>
                            <th>Minggu</th>
                            <th>Status</th>
                            <th style="border-top-right-radius: 20px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach($dokterjadwal as $dokter)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>dr. {{ $dokter->users->fullname }}</td>
                                <td>{{ $dokter->senin === '00:00-00:00' ? '-' : $dokter->senin }}</td>
                                <td>{{ $dokter->selasa === '00:00-00:00' ? '-' : $dokter->selasa }}</td>
                                <td>{{ $dokter->rabu === '00:00-00:00' ? '-' : $dokter->rabu }}</td>
                                <td>{{ $dokter->kamis === '00:00-00:00' ? '-' : $dokter->kamis }}</td>
                                <td>{{ $dokter->jumat === '00:00-00:00' ? '-' : $dokter->jumat }}</td>
                                <td>{{ $dokter->sabtu === '00:00-00:00' ? '-' : $dokter->sabtu }}</td>
                                <td>{{ $dokter->minggu === '00:00-00:00' ? '-' : $dokter->minggu }}</td>
                                <td>{{ $dokter->status }}</td>
                                <td class="aksi">
                                    <button onclick="editJadwalDokter('{{ $dokter->id }}',  '{{ $dokter->senin }}',  '{{ $dokter->selasa }}',  '{{ $dokter->rabu }}',  '{{ $dokter->kamis }}',  '{{ $dokter->jumat }}',  '{{ $dokter->sabtu }}',  '{{ $dokter->minggu }}',  '{{ $dokter->status }}', event)" class="green">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- update data -->
    <div class="editjadwaldokter" id="editdatadokter">
        <form id="editdatasform" method="POST" action="{{ route('editjadwaldokter.jadwal', ':id' ) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h3 id="namaDokter">edit Jadwal Dokter </h3>
            <div class="divdivndiv">
                <div>
                    <p>Senin</p>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <label for="senin1">Mulai</label>
                                </th>
                                <th>
                                    <label for="senin2">Berakhir</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                <input id="senin1" type="time" name="senin1"  required>
                            </td>
                            <td>
                                <input id="senin2" type="time" name="senin2"  required>
                            </td>
                        </tbody>
                    </table>
                </div>
                <div>
                    <p>Selasa</p>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <label for="selasa1">Mulai</label>
                                </th>
                                <th>
                                    <label for="selasa2">Berakhir</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                <input id="selasa1" type="time" name="selasa1"  required>
                            </td>
                            <td>
                                <input id="selasa2" type="time" name="selasa2"  required>
                            </td>
                        </tbody>
                    </table>
                </div>
                <div>
                    <p>Rabu</p>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <label for="rabu1">Mulai</label>
                                </th>
                                <th>
                                    <label for="rabu2">Berakhir</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                <input id="rabu1" type="time" name="rabu1"  required>
                            </td>
                            <td>
                                <input id="rabu2" type="time" name="rabu2"  required>
                            </td>
                        </tbody>
                    </table>
                </div>
                <div>
                    <p>Kamis</p>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <label for="kamis1">Mulai</label>
                                </th>
                                <th>
                                    <label for="kamis2">Berakhir</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                <input id="kamis1" type="time" name="kamis1"  required>
                            </td>
                            <td>
                                <input id="kamis2" type="time" name="kamis2"  required>
                            </td>
                        </tbody>
                    </table>
                </div>
                <div>
                    <p>Jumat</p>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <label for="jumat1">Mulai</label>
                                </th>
                                <th>
                                    <label for="jumat2">Berakhir</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                <input id="jumat1" type="time" name="jumat1"  required>
                            </td>
                            <td>
                                <input id="jumat2" type="time" name="jumat2"  required>
                            </td>
                        </tbody>
                    </table>
                </div>
                <div>
                    <p>Sabtu</p>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <label for="sabtu1">Mulai</label>
                                </th>
                                <th>
                                    <label for="sabtu2">Berakhir</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                <input id="sabtu1" type="time" name="sabtu1"  required>
                            </td>
                            <td>
                                <input id="sabtu2" type="time" name="sabtu2"  required>
                            </td>
                        </tbody>
                    </table>
                </div>
                <div>
                    <p>Minggu</p>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <label for="minggu1">Mulai</label>
                                </th>
                                <th>
                                    <label for="minggu2">Berakhir</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>
                                <input id="minggu1" type="time" name="minggu1"  required>
                            </td>
                            <td>
                                <input id="minggu2" type="time" name="minggu2"  required>
                            </td>
                        </tbody>
                    </table>
                </div>
                <div class="statuses">
                    <label for="status">Status</label>
                    <select id="statuses" type="hidden" name="status" required>
                        <option value="Aktif Bekerja">Aktif Bekerja</option>
                        <option value="Cuti / Libur">Cuti / Libur</option>
                    </select>
                </div>
            </div>
            <div>
                <button type="submit" class="blue">Simpan Perubahan</button>
                <button type="button" onclick="batalJadwalDokter(event)" id="bataledit" class="red">Batalkan</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu3')
        })
        
        function cariDataDokter () {
            let input, filter, table, tr, tdName, i, txtValueName
            input = document.getElementById('cariDokter')
            filter = input.value.toUpperCase();
            table = document.getElementById('tablesss')
            tr = table.getElementsByTagName("tr")
            for (i = 0; i < tr.length; i++) {
                tdName = tr[i].getElementsByTagName("td")[1]
                if (tdName) {
                    txtValueName = tdName.textContent
                    if (txtValueName.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = ""
                    } else {
                        tr[i].style.display = "none"
                    }
                }
            }
        }

        // EDIT DOKTER
        var pengeditanDokter = ':id'
        function editJadwalDokter(editId, senin,  selasa,  rabu,  kamis,  jumat,  sabtu,  minggu,  status, event) {
            event.preventDefault()
            const klikAdmin = document.getElementById('editdatadokter')
            klikAdmin.classList.add('geserkan')


            let senins = senin.split('-')
            let selasas = selasa.split('-')
            let rabus = rabu.split('-')
            let kl = kamis.split('-')
            let jumats = jumat.split('-')
            let sabtus = sabtu.split('-')
            let minggus = minggu.split('-')

            document.getElementById('senin1').value = senins[0]
            document.getElementById('senin2').value = senins[1]
            document.getElementById('selasa1').value = selasas[0]
            document.getElementById('selasa2').value = selasas[1]
            document.getElementById('rabu1').value = rabus[0]
            document.getElementById('rabu2').value = rabus[1]
            document.getElementById('kamis1').value = kl[0]
            document.getElementById('kamis2').value = kl[1]
            document.getElementById('jumat1').value = jumats[0]
            document.getElementById('jumat2').value = jumats[1]
            document.getElementById('sabtu1').value = sabtus[0]
            document.getElementById('sabtu2').value = sabtus[1]
            document.getElementById('minggu1').value = minggus[0]
            document.getElementById('minggu2').value = minggus[1]

            document.getElementById('statuses').value = status

            var aksiEdit = document.getElementById('editdatasform').getAttribute('action').replace(pengeditanDokter, editId)
            pengeditanDokter = editId
            document.getElementById('editdatasform').setAttribute('action', aksiEdit)
        }
        function batalJadwalDokter (event) {
            event.preventDefault()
            const klikAdmin = document.getElementById('editdatadokter')
            klikAdmin.classList.remove('geserkan')

            var aksiEdit = document.getElementById('editdatasform').getAttribute('action').replace(pengeditanDokter, ':id')
            pengeditanDokter = ':id'
            document.getElementById('editdatasform').setAttribute('action', aksiEdit)
        }
    </script>    
</body>
</html>