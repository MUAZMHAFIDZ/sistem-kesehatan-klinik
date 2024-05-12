<div class="pendaftarandokter" id="pendaftarandokter">
    <form method="POST" action="{{ route('registerdokter.submit') }}" enctype="multipart/form-data">
        @csrf
        <div class="reowwww">
            <div>
                <label for="username">UserName</label>
                <input type="text" name="username" placeholder="UserName" required>
            </div>
            <div>
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" placeholder="Full Name" required>
            </div>
        </div>
        <div class="reowwww">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="example@example.com" required>
            </div>
            <div>
                <label for="nohp">No HP</label>
                <input type="number" name="nohp" placeholder="Masukkan No HP" required>
            </div>
        </div>
        <div class="reowwww">
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <label for="password_confirmation">Password Confirm</label>
                <input type="password" name="password_confirmation" placeholder="Ulangi Password" autocomplete="new-password" required>
            </div>
        </div>
        <div class="reowwww">
            <div>
                <label for="riwayat_pendidikan">Riwayat Pendidikat Terakhir</label>
                <input type="text" name="riwayat_pendidikan" placeholder="Riwayat Pendidikat Terakhir" required>
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" placeholder="Alamat" required>
            </div>
        </div>
        <div class="colll">
            <label for="image-upload">
                <i style="color: royalblue; cursor: pointer;" class="fa-solid fa-image"> Foto Profile</i>
            </label>
            <input type="file" name="image" id="image-upload" style="display: none;">
        </div>
        <button type="submit" class="blue">Daftarkan</button>
        <button type="button" onclick="batalKelolaDokter(event)" id="batal" class="red">Batal</button>
    </form>
</div>