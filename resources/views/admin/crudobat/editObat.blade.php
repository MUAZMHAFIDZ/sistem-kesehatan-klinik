<div class="tambahobat" id="editdataobat">
    <form id="editdataform" method="POST" action="{{ route('editobat.submit', ':id') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="rowww">
            <div class="name">
                <label for="nama_obat">Nama Obat</label>
                <input type="text" id="nama_obat" name="nama_obat" placeholder="Nama Obat" required>
            </div>
            <div>
                <label for="jenis_obat">Jenis Obat</label>
                <input type="text" id="jenis_obat" name="jenis_obat" placeholder="Jenis" required>
            </div>
        </div>
        <div class="rowww">
            <div>
                <label for="jumlah">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Satuan" required>
            </div>
            <div>
                <label for="satuan">Satuan</label>
                <input type="text" id="satuan" name="satuan" placeholder="Masukkan Jenis Satuan" required>
            </div>
        </div>
        <div class="rowww">
            <div>
                <label for="harga_satuan">Harga Satuan</label>
                <input type="number" id="harga_satuan" name="harga_satuan" placeholder="Masukkan Harga Satuan" required>
            </div>
            <div>
                <label for="supplier">Supplier</label>
                <input type="text" id="supplier" name="supplier" placeholder="Masukkan Supplier" required>
            </div>
        </div>
        
        <div>
            <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
            <input type="date" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required>
        </div>
        <div>
            <label for="keterangan">Keterangan</label>
            <textarea type="text" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" required></textarea>
        </div>
        <button type="submit" class="blue">Simpan</button>
        <button type="button" onclick="batalEditDataDokter(event)" id="batal" class="red">Batal</button>
    </form>
</div>