@extends('layouts.master')

@section('title', 'Edit')

@section('section')
    
<div class="card-header">
    <h3>Masukkan Data Perjalanan</h3>
  </div>
  
  @foreach ($data as $u)
      
  <form action="/updatedata" method="POST" class="col-7 mt-3">
      @csrf
      <input type="hidden" name="id" value="{{ $u->id }}">
        <div class="mb-3">
            <label for="exampleInputTanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" value="{{ $u->tanggal }}" id="datePickerId" name="tanggal">
          </div>
          <div class="mb-3">
            <label for="exampleInputLokasi" class="form-label">Waktu/Jam Mengunjungi Lokasi</label>
            <input type="time" class="form-control" value="{{ $u->jam }}" id="exampleInputJam" name="jam">
          </div>
          <div class="mb-3">
            <label for="exampleInputLokasi" class="form-label">Lokasi yang Dikunjungi</label>
            <input type="text" class="form-control" value="{{ $u->lokasi }}" id="exampleInputLokasi" name="lokasi">
          </div>
          <div class="mb-3">
            <label for="exampleSuhuTubuh" class="form-label">Suhu Tubuh</label>
            <input type="number" min="32" max="39" value="{{ $u->suhu }}" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" id="exampleSuhuTubuh" name="suhu">
          </div>
          <button type="submit" class="btn btn-primary mb-3">Edit</button>
      </div>
  </form>   
  
  @endforeach
  
    <script>
      datePickerId.max = new Date().toISOString().split("T")[0];
    </script>  
 
@endsection