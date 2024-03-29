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
                                <td>{{ $dokter->username }}</td>
                                <td>dr. {{ $dokter->fullname }}</td>
                                <td>{{ $dokter->nohp }}</td>
                                <td class="aksi">
                                    <button class="green">Edit</button>
                                    <button class="red">Hapus</button>
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

    <div class="pendaftarandokter" id="pendaftarandokter">
        <form method="POST" action="{{ route('registerdokter.submit') }}">
            @csrf
            <div class="name">
                <label for="username">UserName</label>
                <input type="text" name="username" placeholder="UserName" required>
            </div>
            <div>
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" placeholder="Full Name" required>
            </div>
            <div>
                <label for="nohp">No HP</label>
                <input type="number" name="nohp" placeholder="Masukkan No HP" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
            </div>
            <button type="submit" class="blue">Daftarkan</button>
            <button type="button" onclick="batalKelolaDokter(event)" id="batal" class="red">Batal</button>
        </form>
    </div>
    <div class="editdokter"></div>
    <div class="hapusdokter"></div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu9')
        })
        function kelolaDokter (e) {
            e.preventDefault()
            const klikAdmin = document.getElementById('pendaftarandokter')
            klikAdmin.classList.add('geserkan')
        }
        function batalKelolaDokter (e) {
            e.preventDefault()
            var klikAdmin = document.getElementById('pendaftarandokter')
            klikAdmin.classList.remove('geserkan')
        }
    </script>    
</body>
</html>