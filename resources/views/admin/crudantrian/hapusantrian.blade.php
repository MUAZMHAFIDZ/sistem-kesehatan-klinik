{{-- <div class="modal fade" id="hapusantrian-fix" tabindex="-1" role="dialog" aria-labelledby="hapusantrianLabel" aria-hidden="true">  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="hapusantrianLabel">Konfirmasi Hapus Data Antrian</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <p>Anda yakin ingin menghapus data antrian?</p>
   </div>
   <div class="modal-footer">
    <form id="hapusantrianform" method="POST" action="">
     @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <button type="button" class="btn btn-secondary" onclick="batalHapus(event)">Batal</button>
   </div>
  </div>
 </div>
</div> --}}



{{-- BISA STYLE TAPI MENTAH --}}
{{-- <div class="hapusdokter" id="hapusantrian">
    <div class="popuphapus">
        <p>Anda yakin ingin menghapus data antrian?</p>
        <div>
            <form id="hapusantrianform" method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit" class="red">Hapus</button>
            </form>
            <button type="button" class="blue" onclick="batalHapus(event)">Batal</button>
        </div>
    </div>
</div> --}}


<div class="hapusdokter" id="hapusantrian">
    <div class="modal-content"> <!-- Diganti dengan kelas Bootstrap modal-content -->
        <div class="modal-body"> <!-- Diganti dengan kelas Bootstrap modal-body -->
            <p>Apakah anda yakin ingin menghapus data antrian berikut?</p>
            <img src="{{ asset('patient-l.png') }}" id="profile-picture-del" style="width: 100px; object-fit: cover; margin-bottom: 25px; margin-top: 20px;" alt="Profile Picture" class="rounded-circle">
            <div id="hapusdatanya">
            <p>Nama    : <span id="namaAntrian"></span></p>
            <p>Layanan : <span id="layananAntrian"></span></p>
            </div>
            <div id="tombol-confirm">
                <form id="hapusantrianform" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button> <!-- Diganti dengan kelas Bootstrap btn-danger -->
                </form>
                <button type="button" class="btn btn-primary" onclick="batalHapus(event)">Batal</button> <!-- Diganti dengan kelas Bootstrap btn-primary -->
            </div>
        </div>
    </div>
</div>