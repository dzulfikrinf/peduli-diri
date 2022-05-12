@extends('layouts.master')

@section('title', 'Input Data')

@section('section')
    
<div class="card-header">
  <h3>Masukkan Data Perjalanan</h3>
</div>

<form action="/simpanPerjalanan" method="POST" class="col-7 mt-3">
    {{ csrf_field() }}
      <div class="mb-3">
          <label for="exampleInputTanggal" class="form-label">Tanggal</label>
          {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> --}}
          <input type="date" class="form-control" id="datePickerId" name="tanggal">
        </div>
        <div class="mb-3">
          <label for="exampleInputLokasi" class="form-label">Waktu/Jam Mengunjungi Lokasi</label>
          <input type="time" class="form-control" id="exampleInputLokasi" placeholder="Lokasi yang Dikunjungi" name="jam">
        </div>
        <div class="mb-3">
          <label for="exampleInputLokasi" class="form-label">Lokasi yang Dikunjungi</label>
          <input type="text" class="form-control" id="exampleInputLokasi" name="lokasi">
        </div>
        <div class="mb-3">
          <label for="exampleSuhuTubuh" class="form-label">Suhu Tubuh</label>
          <input type="number" min="32" max="39" class="form-control" id="exampleSuhuTubuh" name="suhu">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
  </div>

  <script>
    datePickerId.max = new Date().toISOString().split("T")[0];
  </script>

@endsection