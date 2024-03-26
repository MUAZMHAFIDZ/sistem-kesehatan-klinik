<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content">
        <h1>antrian pasien</h1>
    </div>
    <!-- <script>
        const activeMenu = (menu) => {
            var nav1 = document.querySelectorAll('.navbar li a')
            nav1.forEach(nav => {
                nav.classList.remove('active')
            })

            const klikMenu = document.getElementById(menu)
            klikMenu.classList.add('active')

            const content = document.getElementById('content')
            switch(menu) {
                case 'menu1':
                    content.innerHTML = "@include('admin.home')"
                    break
                case 'menu2':
                    content.innerHTML = "@include('admin.profil')"
                    break
                case 'menu3':
                    content.innerHTML = "@include('admin.jadwaldok')"
                    break
                case 'menu4':
                    content.innerHTML = "@include('admin.stokobat')"
                    break
                case 'menu5':
                    content.innerHTML = "@include('admin.datapasien')"
                    break
                case 'menu6':
                    content.innerHTML = "@include('admin.antrian')"
                    break
                case 'menu7':
                    content.innerHTML = "@include('admin.riwayat')"
                    break
                case 'menu8':
                    content.innerHTML = "@include('admin.cetaklaporan')"
                    break
                default:
                    content.innerHTML = "@include('admin.home')"
                    break
            }
            return false
        }
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu1')
        })
    </script> -->
</body>
</html>