<div class="pendaftarandokter" id="editdatadokter">
    <form id="editdataform" method="POST" action="{{ route('editdokter.submit', ':id') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="name">
            <label for="username">UserName</label>
            <input id="editNama" type="text" name="username" placeholder="UserName" required>
            </div>
        <div>
            <label for="fullname">Full Name</label>
            <input id="editFullname" type="text" name="fullname" placeholder="Full Name" required>
        </div>
            <div>
            <label for="nohp">No HP</label>
            <input id="editNoHP" type="number" name="nohp" placeholder="Masukkan No HP" required>
        </div>
        <div>
            <label for="password">Password ( biarkan kosong jika tidak ada perubahan )</label>
            <input type="password" name="password" placeholder="Password (Biarkan Kosong Jika tidak ada Perubahan)">
        </div>
        <div>
            <label for="password_confirmation">Password Confirm ( kosong jika tidak ada perubahan )</label>
            <input type="password" name="password_confirmation" placeholder="Password (Biarkan Kosong Jika tidak ada Perubahan)" autocomplete="new-password">
        </div>
        <div>
            <label for="image-upload2">
                <i style="color: royalblue; cursor: pointer;" class="fa-solid fa-image"> Foto Profile (opsional)</i>
            </label>
            <input type="file" name="image" id="image-upload2" style="display: none;">
        </div>
        <button type="submit" class="blue">Simpan Perubahan</button>
        <button type="button" onclick="batalEditDataDokter(event)" id="bataledit" class="red">Batalkan</button>
    </form>
</div>