@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
       <h6 class="card-title">Data Poli</h6>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>
                        Poli ID
                    </th>
                    <th>Nama Poli</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row->Poli_ID}}</td>
                    <td>{{ $row->Nama_Poli }}</td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
