@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
       <h6 class="card-title">Data Pasien</h6>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>
                        Nama Pasien
                    </th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row->Nama_Pasien }}</td>
                    <td>{{ $row->Tanggal_Lahir }}</td>
                    <td>{{ $row->Jenis_Kelamin }}</td>
                    <td>{{ $row->Alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
