<div class="pendaftarandokter" id="pendaftarandokter">
    <form method="POST" action="{{ route('registerdokter.submit') }}" enctype="multipart/form-data">
        @csrf
        <div class="name">
            <label for="username">UserName</label>
            <input type="text" name="username" placeholder="UserName" required>
            </div>
        <div>
            <label for="fullname">Full Name</label>
                <input type="text" name="fullname" placeholder="Full Name" required>
        </div>
            <div>
            <label for="nohp">No HP</label>
            <input type="number" name="nohp" placeholder="Masukkan No HP" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div>
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
        </div>
        <div>
            <label for="image-upload">
                <i style="color: royalblue; cursor: pointer;" class="fa-solid fa-image"> Foto Profile</i>
            </label>
            <input type="file" name="image" id="image-upload" style="display: none;">
        </div>
        <button type="submit" class="blue">Daftarkan</button>
        <button type="button" onclick="batalKelolaDokter(event)" id="batal" class="red">Batal</button>
    </form>
</div>