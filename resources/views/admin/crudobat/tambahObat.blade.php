<div class="tambahobat" id="pendaftarandokter">
    <form method="POST" action="{{ route('tambahobat.submit') }}" enctype="multipart/form-data">
        @csrf
        <div class="rowww">
            <div class="name">
                <label for="nama_obat">Nama Obat</label>
                <input type="text" name="nama_obat" placeholder="Nama Obat" required>
            </div>
            <div>
                <label for="jenis_obat">Jenis Obat</label>
                <input type="text" name="jenis_obat" placeholder="Jenis" required>
            </div>
        </div>
        <div class="rowww">
            <div>
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" placeholder="Masukkan Jumlah Satuan" required>
            </div>
            <div>
                <label for="satuan">Satuan</label>
                <input type="text" name="satuan" placeholder="Masukkan Jenis Satuan" required>
            </div>
        </div>
        <div class="rowww">
            <div>
                <label for="harga_satuan">Harga Satuan</label>
                <input type="number" name="harga_satuan" placeholder="Masukkan Harga Satuan" required>
            </div>
            <div>
                <label for="supplier">Supplier</label>
                <input type="text" name="supplier" placeholder="Masukkan Supplier" required>
            </div>
        </div>
        
        <div>
            <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
            <input type="date" name="tanggal_kadaluarsa" required>
        </div>
        <div>
            <label for="keterangan">Keterangan</label>
            <textarea type="text" name="keterangan" placeholder="Masukkan Keterangan" required></textarea>
        </div>
        <button type="submit" class="blue">Daftarkan</button>
        <button type="button" onclick="batalKelolaObat(event)" id="batal" class="red">Batal</button>
    </form>
</div>