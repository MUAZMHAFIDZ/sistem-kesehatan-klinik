<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 50px;
    text-align: center;
    line-height: 5px;
    }
    .header span {
        font-size: 25px;
        color: #005fff;
        margin: 30px 10px 0 10px;
        float: left;
    }
    .header div {
        margin-right: 190px;
        float: right;
    }
    .content {
        margin-top: 100px;
    }
    table {
        border-collapse: collapse;
    }
    table th, table td {
        border: 1px solid black;
        padding: 5px;
    }
    .content .hormat {
        margin: 30px;
        float: right;
    }
    .homat {
        line-height: 5px;
    }
    </style>
</head>
<body>
    <div class="header">
        <span>KlinikDentalCare</span>
        <div class="klinikdentalcare">
            <p>Klinik DentalCare</p>
            <p>Jl. Spiderman, no 1</p>
            <p>Rekam Medis Mingguan Klinik DentalCare</p>
        </div>
    </div>
    <div class="content">
        <div class="tanggal">
            <p>19 mei xxxx</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="border-top-left-radius: 20px;">No</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Layanan</th>
                        <th>Diagnosa</th>
                        <th>Jumlah Kunjungan</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i=0;$i<10;$i++)
                    @php
                        $count = 1;
                    @endphp
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                        </tr>
                    @endfor
                </tbody>
        </table>
        <div class="hormat">
            <p class="homat">Hormat Saya</p>
            <p>Admin Klinik DentalCare</p>
            <br>
            <p>.............................</p>
        </div>
    </div>
</body>
</html>