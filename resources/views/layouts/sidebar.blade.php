<div class="col-md-2">
<div class="card">
    <div class="card-header">
        <h6 class="card-title text-center">MENU</h6>
    </div>
    <div class="card-body">
        <p class="lead">Form</p>
        <ul>
            <li><a href="{{ route('DataPasien.index') }}">Data Pasien </a></li>
            <li><a href="{{ route('DataDokter.index') }}">Data Dokter </a></li>
            <li><a href="{{ route('DataPoli.index') }}">Data Poli </a></li>
            <li><a href="{{ route('DataBerobat.index') }}">Data Berobat </a></li>
        </ul>
        <p class="lead mt-5">Laporan</p>
        <ul>
            <li><a href="{{ route('laporanDokter') }}">List Dokter</a></li>
            <li>List Pasien</li>
            <li>List Berobat</li>
        </ul>
    </div>
</div>
</div>
