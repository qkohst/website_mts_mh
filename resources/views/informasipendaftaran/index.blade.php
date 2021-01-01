@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Informasi Pendaftaran</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li>Informasi Pendaftaran</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  @if ($informasi_pendaftaran->count() >= 1)
  @foreach($informasi_pendaftaran as $info_daftar)
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        @if ($info_daftar->status==1)
        <h3>Status : <span class="badge badge-success">Pendaftaran Buka</span> </h3>
        @else
        <h3>Status : <span class="badge badge-danger">Pendaftaran Tutup</span></h3>
        @endif
        <p>{!!$info_daftar->deskripsi!!}</p>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content">
        <img src="{{URL::to('/')}}/gambar_pendaftaran/{{$info_daftar->gambar}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="text-center mt-4"> <a href="{{route('informasipendaftaran.edit', $info_daftar->id)}}" class="btn btn-md btn-success">Edit Informasi Pendaftaran</a></div>
  </div>
  @endforeach
  @else
  <div class="text-center"> <a href="{{route('informasipendaftaran.create')}}" class="btn btn-md btn-success">Buat Informasi Pendaftaran</a></div>
  @endif
</section><!-- End About -->
@endsection