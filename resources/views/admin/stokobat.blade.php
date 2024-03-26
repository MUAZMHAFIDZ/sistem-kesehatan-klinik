<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | Stok Obat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content">
        <h1>stok obat</h1>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu4')
        })
    </script>
</body>
</html>
