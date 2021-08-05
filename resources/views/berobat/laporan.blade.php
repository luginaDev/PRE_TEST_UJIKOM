@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
       <h6 class="card-title">Data Berobat</h6>
       <!-- Button trigger modal -->
       <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add new</button>
    </div>


 
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Create Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('DataBerobat.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">No.Transaksi</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">No.Transaksi</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Nama Pasien</label>
                <select name="" id="" class="form-control">

                </select>
            </div>

            <div class="form-row">
                <div class="col-4">
                    <label for="">Tanggal</label>
                    <select name="" id=""  class="form-control">
                        <option value="" class="form-control" disabled>Pilih Tanggal</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="">Bulan</label>
                    <select name="" id="" class="form-control">
                        <option value=""  disabled>Pilih Bulan</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="">Tahun</label>
                    <input type="number" maxlength="4" class="form-control">
                </div>
               
            </div>
            <div class="form-group">
                <label for="">Pilih Dokter</label>
                <select name="" id="" class="form-control">
                    <option value="">Pilih Dokter</option>
                </select>
            </div>
            <div class="btn btn-group">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Clear</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>


    <div class="card-body">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>
                        No Transaksi
                    </th>
                    <th>Pasien ID</th>
                    <th>Nama Pasien</th>
                    <th>Usia</th>
                    <th>Tanggal Berobat</th>
                    <th>Jenis Kelamin</th>
                    <th>Keluhan</th>
               
                    <th>Nama Poli</th>
                    <th>Nama Dokter</th>
                    <th>Biaya Administrasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>
                        <div class="btn-group">
                            <a href="" class="btn btn-primary">Edit</a>
                            <form action="" method="">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->Pasien_ID }}</td>
                    <td>{{ $row->pasien->Nama_Pasien }}</td>
            
                    <td><?php
                        // my appologize for my bad code Sir.. dikejar waktu :)
                        $date =\Carbon\Carbon::parse($row->pasien->Tanggal_lahir);
                        $now = \Carbon\Carbon::now();
                        $diff = $date->diffInYears($now);
                        echo $diff;?> Tahun</td>

                    <td>{{ $row->Tanggal_Berobat}}</td>
                    <td>{{ $row->pasien->Jenis_Kelamin}}</td>
                    <td>{{ $row->Keluhan}}</td>
               
                    <td>{{ $row->dokter->poli->Nama_Poli }}</td>
                    <td>{{ $row->dokter->Nama_Dokter }}</td>
                    <td>Rp.{{ number_format($row->Biaya_adm) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
