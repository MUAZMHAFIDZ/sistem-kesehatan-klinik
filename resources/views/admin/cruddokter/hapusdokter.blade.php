<div class="hapusdokter" id="hapusdokter">
    <div class="popuphapus">
        <p>Anda yakin ? Data akan hilang Permanent!</p>
        <div>
            <form id="hapusdokterform" method="POST" action="{{ route('deletedokter.submit', ':id') }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="red">iya</button>
            </form>
            <button type="button" class="blue" onclick="batalHapus(event)">tidak</button>
        </div>
    </div>
</div>