<div class="popup-rincian" id="popup-rincian">
    <div class="modal-content">
        <div class="modal-body fix-pad">
            <div style="text-align: right; right: -20px !important; position: relative;">
                <button onclick="btnClose(event)" class="btn btn-danger btn-sm" style="font-family: 'Arial', sans-serif; font-size: 20px; width: 45px; height: 35px;">X</button>
            </div>
            <div class="row justify-content-center bg-fix">
                <div class="col col-md-4 prof">
                    <img src="{{ asset('patient-l.png') }}" id="profile-picture" style="width: 200px; object-fit: cover; margin-bottom: 25px; margin-top: 20px;" alt="Profile Picture" class="rounded-circle">
                    <h5 id="r-nama" style="color: blue;"></h5>
                    <p id="r-dokter"></p>
                </div>
                <div class="col col-md-4" style="text-align: left;">
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Layanan</p>
                    <p id="r-kategori_layanan"></p>
                </div>
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Gigi Sakit</p>
                    <p id="r-gigi_sakit"></p>
                </div>
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Gigi Berdarah</p>
                    <p id="r-gigi_berdarah"></p>
                </div>
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Tanggal Periksa</p>
                    <p id="r-tanggal_periksa"></p>
                </div>
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Waktu Periksa</p>
                    <p id="r-waktu"></p>
                </div>
                </div>
                <div class="col col-md-4" style="text-align: left;">
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Jenis Kelamin</p>
                    <p id="r-jenis_kelamin"></p>
                </div>
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Usia</p>
                    <p id="r-usia"></p>
                </div>
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Nomor Telepon</p>
                    <p id="r-no_telepon"></p>
                </div>
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Alamat</p>
                    <p id="r-alamat"></p>
                </div>
                <div class="bord">
                    <p style="font-weight:bold; color: blue;">Nomor Antrian</p>
                    <p id="r-nomor"></p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>