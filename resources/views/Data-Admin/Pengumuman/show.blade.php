@extends('Data-Admin.sekertaris.template')
@section('content')
<div class="card">
  <div class="card-header"> <a href="{{ url('sekertaris') }}">Home</a> {{ __('/ Pengumuman') }}</div>
      <hr>
  </div>
<h4 class="text-center" style="font-family:  Arial black" >Pengumuman </h4>

<div class="row">
    

     <div class="col-lg-12 ">
    <div class="card shadow ">
 
    <div class="card-body >
   
    <div class="card-title fw-bold text-primary h4 "> <h4> <b><i class="fas fa-arrow-circle-right"></i> {{ $pengumuman->judul }}</b></h4> </div>
    <p class="text-secondary">  {!! ($pengumuman->isi) !!}</p>
   <br>
 <b> Tanggal: {{ $pengumuman->created_at->tz('Asia/Jakarta')->format('d M Y H:i') }}</b>
    
     <hr>
  </div>
</div>
</div>

    @endsection