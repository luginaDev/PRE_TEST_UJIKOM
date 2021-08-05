@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
       <h6 class="card-title">Data Dokter</h6>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Dokter ID</th>

                    <th>Nama Dokter</th>
                    <th>Poli ID</th>
                    <th>Nama Poli</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row->Dokter_ID }}</td>
                    <td>{{ $row->Nama_Dokter }}</td>
                    <td>{{ $row->Poli->Poli_ID}}</td>
                    <td>{{ $row->Poli->Nama_Poli}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
