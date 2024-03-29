<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
</head>
<body>
    @include('admin.component.navbar');
    <div id="content" class="content">
        
    
    
    <!-- ========================== pasien hari ini ========================== -->
    <div class="home">
        <div class="item">
            <div class="headcard">
                <p>Pasien Hari Ini</p>
            </div>
            <div class="card">
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
            </div>
        </div>
        <!-- ========================== dokter bertugas hari ini ========================== -->
        <div class="item">
            <div class="headcard">
                <p>Dokter Bertugas Hari ini</p>
            </div>
            <div class="card">
                <div class="data">
                    <p>dr. xxxx</p>
                </div>
                <div class="data">
                    <p>dr. xxxx</span></p>
                </div>
            </div>
        </div>
        <!-- ========================== dokter aktif ========================== -->
        <div class="item">
            <div class="headcard">
                <p>Dokter Online</p>
            </div>
            <div class="card">
                <div class="data">
                    <p>dr. xxxx</p>
                </div>
                <div class="data">
                    <p>dr. xxxx</p>
                </div>
            </div>
        </div>
        <!-- ========================== admin aktif ========================== -->
        <div class="item">
            <div class="headcard">
                <p>Admin Online</p>
            </div>
            <div class="card">
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
            </div>
        </div>
        <!-- ========================== survey pasien ========================== -->
        <div class="itemlong">
            <div class="headcard">
                <p>Survey Pasien</p>
            </div>
            <div class="card">
                <div class="data">
                    <p>Pasien Kurang Puas</p>
                    <div class="percent1"><p>20%</p></div>
                </div>
                <div class="data">
                    <p>Pasien Lumayan Puas</p>
                    <div class="percent2"><p>10%</p></div>
                </div>
                <div class="data">
                    <p>Pasien Sangat Puas</p>
                    <div class="percent3"><p>70%</p></div>
                </div>
            </div>
        </div>
        <!-- ========================== stok obat ========================== -->
        <div class="item">
            <div class="headcard">
                <p>Stok Obat Yang Menipis</p>
            </div>
            <div class="card">
                <div class="data">
                    <p>xxx obat : <span>( 3 tablet )</span></p>
                </div>
                <div class="data">
                    <p>xxx obat : <span>( 3 tablet )</span></p>
                </div>
            </div>
        </div>
        <!-- ========================== pasien dalam antrian ========================== -->
        <div class="item">
            <div class="headcard">
                <p>Pasien dalam Antrian</p>
            </div>
            <div class="card">
                <div class="data">
                    <p>xxxx</p>
                </div>
                <div class="data">
                    <p>xxxx</span></p>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            activeMenu('menu1')
        })
    </script>
</body>
</html>