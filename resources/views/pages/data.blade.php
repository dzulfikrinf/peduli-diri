@extends('layouts.master')

@section('title', 'Data')

@section('section')

<div class="container-fluid">

    @if ($message = Session::get('message'))
	  <div class="alert alert-info alert-block">
	    <button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	  </div>
	@endif
   
    <!-- DataTables -->
    <div class="card shadow mb-4 mt-3">
        <div class="card-header">
            <h3>Catatan Perjalanan</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        @php
                            $no=1;
                        @endphp
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Lokasi</th>
                            <th>Suhu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Lokasi</th>
                            <th>Suhu</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $peduli_diri)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$peduli_diri->tanggal}}</td>
                            <td>{{$peduli_diri->jam}}</td>
                            <td>{{$peduli_diri->lokasi}}</td>
                            <td>{{$peduli_diri->suhu}}</td>
                            <td>
                                    <a class="btn btn-primary btn-sm" href="/editdata/{{$peduli_diri->id}}">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="/hapusdata/{{$peduli_diri->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
@endsection