<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dokter/homeDokter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dashboard | Home</title>
</head>
<body class="bg-light">
    @include('dokter/layoutsDokter/navDok')
    <br>
    <div class="absen rounded shadow-sm eow">
        <div class="py-4 d-flex align-items-center">
            <i class="bi bi-clipboard"></i>
            <div>
                <a href='#' class="btn btn-warning btn-sm">Kehadiran</a>
            </div>
        </div>
    </div>

    <div class="antriseluruh rounded shadow-sm">
        <div class="py-4 d-flex align-items-center">
            <i class="bi bi-clipboard"></i>
            <div>
                <span>100</span>
                <span class="d-block">Total Pasien</span>
            </div>
        </div>
    </div>


</body>
</html>
