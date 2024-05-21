<div class="pendaftarandokter" id="editdatadokter">
    <form id="editdataform" method="POST" action="{{ route('editdokter.submit', ':id') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="reowwww">
            <div>
                <label for="username">UserName</label>
                <input id="editNama" type="text" name="username" placeholder="UserName" required>
            </div>
            <div>
                <label for="fullname">Full Name</label>
                <input id="editFullname" type="text" name="fullname" placeholder="Full Name" required>
            </div>
        </div>
        <div class="reowwww">
            <div>
                <label for="email">Email</label>
                <input id="editEmail" type="email" name="email" placeholder="example@example.com" required>
            </div>
            <div>
                <label for="nohp">No HP</label>
                <input id="editNoHP" type="number" name="nohp" placeholder="Masukkan No HP" required>
            </div>
        </div>
        <div class="reowwww">
            <div>
                <label for="password">Password ( biarkan kosong jika tidak ada perubahan )</label>
                <input type="password" name="password" placeholder="Password (Biarkan Kosong Jika tidak ada Perubahan)">
            </div>
            <div>
                <label for="password_confirmation">Password Confirm ( kosong jika tidak ada perubahan )</label>
                <input type="password" name="password_confirmation" placeholder="Password (Biarkan Kosong Jika tidak ada Perubahan)" autocomplete="new-password">
            </div>
        </div>
        <div class="reowwww">
            <div>
                <label for="riwayat_pendidikan">Riwayat Pendidikat Terakhir</label>
                <input id="editRiwayat_pendidikan" type="text" name="riwayat_pendidikan" placeholder="Riwayat Pendidikat Terakhir" required>
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <input id="editAlamat" type="text" name="alamat" placeholder="Alamat" required>
            </div>
        </div>
        <div class="reowwww">
            <div>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div style="display: flex; flex-direction: row;">
                    <label>
                        <input id="editJenis1" style="width: 15px; height: 15px;" type="radio" name="jenis_kelamin" value="laki-laki" required>Laki Laki
                    </label>
                    <label>
                        <input id="editJenis2" style="width: 15px; height: 15px;" type="radio" name="jenis_kelamin" value="perempuan" required>Perempuan
                    </label>
                </div>
            </div>
            <div>
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input id="editTanggalLahir" type="date" name="tanggal_lahir" required>
            </div>
        </div>
        <div class="colll">
            <label for="image-upload2">
                <i style="color: royalblue; cursor: pointer;" class="fa-solid fa-image"> Foto Profile (opsional)</i>
            </label>
            <input type="file" name="image" id="image-upload2" style="display: none;">
        </div>
        <button type="submit" class="blue">Simpan Perubahan</button>
        <button type="button" onclick="batalEditDataDokter(event)" id="bataledit" class="red">Batalkan</button>
    </form>
</div>