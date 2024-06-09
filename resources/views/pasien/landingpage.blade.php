<!-- Menu Navigation Bar -->
@include('pasien.layout.navbarPasien')

<!-- Body Section Start-->
<section id="home" class="konten-utama">
    <div class="box-konten-utama">
        <h1>DentalCare</h1>
        <img src="{{ asset('/image/doctorLandingPage.png') }}" alt="">
        <span class="textpromo1">
            Yuk, periksa gigi sekarang! <br> Didalam tubuh yang sehat <br> terdapat gigi yang kuat
        </span>
        <span class="textpromo2">
            <ion-icon name="chatbubbles"></ion-icon>Gratis <br> Konsultasi
        </span>
        <span class="textpromo3">
            <ion-icon name="medkit"></ion-icon>100% Tenaga <br> Medis Profesional!
        </span>
        <div class="card">
            <div class="cardbox1">
                <span class="textpromo4">Book <br> appointment <br> now?<ion-icon name="receipt"></ion-icon></span>
            </div>
            <div class="cardbox2">
                <a href="{{ route('/register') }}"><ion-icon name="send-sharp"></ion-icon>Lets Go</a>
            </div>
        </div>
    </div>
</section>
<section class="konten-utama">
    <div class="container-promo">
        <div class="header">
            <h1>DENTAL CARE</h1>
            <P>Dental Care telah dipercaya melayani pasien di Indonesia selama lebih dari 15 tahun dengan 15 cabang yang tersebar di Madiun, Ponorogo, Magetan, Solo, Kediri, dan Surabaya. Dengan berbagai keunggulan demi memberikan kenyamanan selama prosedur perawatan gigi dan mulut di DENTAL CARE.</P>
        </div>
        <div class="cardpromo">
            <div class="promo">
                <img src="{{ asset('/image/promoPicture1.jpg') }}" alt="">
                <p>Tenaga Medis <br> Bersertifikasi</p>
            </div>
            <div class="promo">
                <img src="{{ asset('/image/promoPicture2.jpg') }}" alt="">
                <p>Dilengkapi <br> Dengan Teknologi <br> Canggih</p>
            </div>
            <div class="promo">
                <img src="{{ asset('/image/promoPicture3.jpg') }}" alt="">
                <p>Mudah <br> Dijangkau</p>
            </div>
            <div class="promo">
                <img src="{{ asset('/image/promoPicture4.jpg') }}" alt="">
                <p>Harga <br> Terjangkau</p>
            </div>
            <div class="promo">
                <img src="{{ asset('/image/promoPicture5.jpg') }}" alt="">
                <p>Cicilan 0%</p>
            </div>
            <div class="promo">
                <img src="{{ asset('/image/promoPicture6.jpg') }}" alt="">
                <p>Non-tunai <br> Dengan Asuransi Anda</p>
            </div>
            <div class="promo">
                <img src="{{ asset('/image/promoPicture7.jpg') }}" alt="">
                <p>Layanan <br> Yang Sangat Baik</p>
            </div>
            <div class="promo">
                <img src="{{ asset('/image/promoPicture8.jpg') }}" alt="">
                <p>Covid-19 Ready</p>
            </div>
        </div>
    </div>
</section>

<!-- Facility Section Start -->
<section id="fasilitas" class="fasilitas">
    <div class="container-fasilitas">
        <div class="header">
            <p>Fasilitas kami</p> 
            <h2>kenapa Harus Dental Care?</h2>
        </div>
        <div class="body">
            <div class="box-fasilitas">
                <img src="{{ asset('/image/fasilitasPicture1.jpg') }}" alt="">
                <div class="keterangan">
                    <h4>PERALATAN DENTAL YANG MODERN</h4>
                    <p>
                        Ruang perawatan di klinik Dental Care dilengkapi peralatan dental terkini dengan teknologi berstandar internasional, seperti Kamera Intra Oral yang mampu memperlihatkan detail kondisi gigi geligi di dalam rongga mulut pasien, Light Curing khusus untuk treatment bleaching (pemutihan gigi), Endomotor untuk perawatan saluran akar dengan metode terbaru Rotary System, serta perangkat canggih lainnya sebagai pendukung kinerja Dokter Gigi Spesialis untuk memberikan perawatan gigi terbaik.
                    </p>
                </div>
            </div>
            <div class="box-fasilitas">
                <img src="{{ asset('/image/fasilitasPicture2.jpg') }}" alt="">
                <div class="keterangan">
                    <h4>STERELISASI ALAT UNTUK PERLINDUNGAN MAKSIMAL</h4>
                    <p>
                        Seluruh alat yang digunakan dalam prosedur perawatan dental telah melalui proses sterilisasi menggunakan Autoclave Gold Standard International sebelum digunakan pada setiap pasien, hal ini dalam rangka pencegahan penularan penyakit yang disebabkan oleh mikroorganisme patogen seperti bakteri, jamur, maupun virus. Penggunaan alat sekali pakai juga diterapkan dalam beberapa prosedur perawatan guna mencegah infeksi silang antar pasien.
                    </p>
                </div>
            </div>
            <div class="box-fasilitas">
                <img src="{{ asset('/image/fasilitasPicture3.jpg') }}" alt="">
                <div class="keterangan">
                    <h4>RUANG TUNGGU YANG NYAMAN</h4>
                    <p>
                        Ruang tunggu di seluruh cabang klinik Dental Care di desain dengan interior berkonsep “homey” serta dilengkapi dengan fasilitas pendukung untuk memastikan kenyamanan pasien saat menunggu giliran perawatan.
                    </p>
                </div>
            </div>
            <div class="box-fasilitas">
                <img src="{{ asset('/image/fasilitasPicture4.jpg') }}" alt="">
                <div class="keterangan">
                    <h4>KIDS AREA YANG MENYENANGKAN</h4>
                    <p>
                        Klinik Dental Care memiliki fasilitas Kids Area berkonsep playground dengan desain yang “cute” serta dilengkapi berbagai jenis mainan. Anak-anak akan lebih rileks dan bisa bermain sambil menunggu gilirannya dipanggil ke ruang praktik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Facility Section End -->

<!-- Doctor Section Start -->
<section id="dokter" class="dokter">
    <div class="header">
        <p>Tenaga Medis Bersertifikasi</p> 
        <h2>Temui Dokter Kami</h2>
    </div>
    <div class="galery-dokter">
        <div class="box-dokter">
            <img src="{{ asset('/image/profilDokter1.png') }}" alt="">
            <div class="profil">
                Dr. Andika Pratama, Sp. KGA.
            </div>
        </div>
        <div class="box-dokter">
            <img src="{{ asset('/image/profilDokter2.png') }}" alt="">
            <div class="profil">
                Dr. Dito Santoso, Sp. Ort.
            </div>
        </div>
        <div class="box-dokter">
            <img src="{{ asset('/image/profilDokter3.jpg') }}" alt="">
            <div class="profil">
                Dr. Fajar Nugroho, MDS.
            </div>
        </div>
        <div class="box-dokter">
            <img src="{{ asset('/image/profilDokter4.jpg') }}" alt="">
            <div class="profil">
                Dr. Galih Wijaya, Sp. KG.
            </div>
        </div>
        <div class="box-dokter">
            <img src="{{ asset('/image/profilDokter5.jpg') }}" alt="">
            <div class="profil">
                Dr. Bunga Cahaya, Sp. KG
            </div>
        </div>
        <div class="box-dokter">
            <img src="{{ asset('/image/profilDokter6.jpg') }}" alt="">
            <div class="profil">
                Dr. Citra Lestari, MDS.
            </div>
        </div>
        <div class="box-dokter">
            <img src="{{ asset('/image/profilDokter7.jpg') }}" alt="">
            <div class="profil">
                Dr. Desi Pratiwi, Sp. KG.
            </div>
        </div>
        <div class="box-dokter">
            <img src="{{ asset('/image/profilDokter8.jpg') }}" alt="">
            <div class="profil">
                Dr. Elsa Permata, M. Kes.
            </div>
        </div>
        
    </div>
</section>
<!-- Doctor Section End -->

<!-- Working hours Section Start -->

<setion id="jam-kerja" class="jam-kerja">
    <div class="info-jam-kerja">
        <div class="header">
            <span>Informasi Jam Operasional</span>
            <h2>Dental Care</h2>
        </div>
        <div class="jadwal-jam-kerja">
            <div class="jadwal">
                <span><ion-icon name="time"></ion-icon> Senin</span>
                <span>08:00 - 21:00</span>
            </div>
            <div class="jadwal">
                <span><ion-icon name="time"></ion-icon> Selasa</span>
                <span>08:00 - 21:00</span>
            </div>
            <div class="jadwal">
                <span><ion-icon name="time"></ion-icon> Rabu</span>
                <span>08:00 - 21:00</span>
            </div>
            <div class="jadwal">
                <span><ion-icon name="time"></ion-icon> Kamis</span>
                <span>08:00 - 21:00</span>
            </div>
            <div class="jadwal">
                <span><ion-icon name="time"></ion-icon> Jum'at</span>
                <span>08:00 - 21:00</span>
            </div>
            <div class="jadwal">
                <span><ion-icon name="time"></ion-icon> Sabtu</span>
                <span>08:00 - 21:00</span>
            </div>
            <div class="jadwal">
                <span><ion-icon name="time"></ion-icon> Minggu</span>
                <span>08:00 - 21:00</span>
            </div> 
        </div>
    </div>
</setion>

<!-- Working hours Section End -->

<!-- Body Section End -->



<!-- Footer Start -->

<section id="footer" class="container-footer">
    <div class="footer">
        <div class="footLink">
            <h3>Contact</h3>
            <ul>
                <li>
                    <a href="https://whatsapp.com" target="blank">WhatsApp</a>
                </li>
            </ul>
        </div>
        <div class="footLink">
            <h3>Follow Us</h3>
            <ul>
                <li>
                    <a href="https://instagram.com" target="blank">Instagram</a>
                </li>
                <li>
                    <a href="https://tiktok.com" target="blank">TikTok</a>
                </li>
                <li>
                    <a href="https://facebook.com" target="blank">Facebook</a>
                </li>
                <li>
                    <a href="https://youtube.com" target="blank">Youtube</a>
                </li>
            </ul>
        </div>
        <div class="footLink">
            <h3>Layanan Pengaduan Konsumen</h3>
            <h4>Klinik Dental Care</h4>
            <p>
                Jl. Serayu No.84, Pandean, <br> Taman, Pandean, Kec. Taman, Kota Madiun
            </p>
            <p>
                <a href="mailto:help@klinikdentalcare.com">help@klinikdentalcare.com</a>
            </p>
        </div>

    </div>
    <div class="coppyright_footer">
        <p>
            &copy; Kelompok 1 Desain Dan Pemrograman Web <br>
            Website Dikembangkan Oleh Mahasiswa Politeknik Negeri Madiun
        </p>
    </div>
</section>

<!-- Footer End -->