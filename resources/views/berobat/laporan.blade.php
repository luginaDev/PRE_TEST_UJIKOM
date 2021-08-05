@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
       <h6 class="card-title">Data Berobat</h6>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>
                        No Transaksi
                    </th>
                    <th>Pasien ID</th>
                    <th>Tanggal Berobat</th>
                    <th>Dokter ID</th>
                    <th>Keluhan</th>
                    <th>Biaya Administrasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->Pasien_ID }}</td>
                    <td>{{ $row->Tanggal_Berobat}}</td>
                    <td>{{ $row->Dokter_ID }}</td>
                    <td>{{ $row->Keluhan }}</td>
                    <td>Rp.{{ number_format($row->Biaya_adm) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
