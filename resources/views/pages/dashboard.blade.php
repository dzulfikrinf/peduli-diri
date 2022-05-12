@extends('layouts.master')

@section('title', 'Dashboard')

@section('section')

<div class="card-header">
  <h3>Dashboard</h3>
</div>

<div class="card text-end" style="width: 100%;">
    <div class="card-body">
      <h5 class="card-title"><strong> Selamat Datang <b>{{ auth()->user()->name }}</b> di Peduli Diri </strong></h5>
      <p class="card-text">Bagaimana keadaanmu? Jangan lupa untuk selalu mengisi data perjalanan yang pernah Anda lakukan selama pandemi di Peduli Diri!</p>
    </div>
</div>
<br>
<div class="row justify-content-end">
    <a href="/input" class="btn btn-primary" style="font-size: 15px">Isi data perjalanan</a>
</div>
    
@endsection