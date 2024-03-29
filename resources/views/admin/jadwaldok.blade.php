<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | jadwal dokter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/jadwaldok.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content">
        <div class="itemcontent">
            <div class="jadwaldokter">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                            <th>Sabtu</th>
                            <th>Minggu</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach($dokters as $dokter)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>dr. {{ $dokter->fullname }}</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="crud">
                <button class="blue">Tambah</button>
                <button class="green">Edit</button>
                <button class="red">Hapus</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu3')
        })
    </script>    
</body>
</html>