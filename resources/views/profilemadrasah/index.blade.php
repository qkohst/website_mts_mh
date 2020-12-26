@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Profile Madrasah</h4>
      <ol>
        <li><a href="#">Admin</a></li>
        <li>Profile Madrasah</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
@foreach($profile_madrasah as $profile)
<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1>{{$profile->nama}} </h1>
        <p>{{$profile->deskripsi}}</p>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content">
        <img src="{{URL::to('/')}}/gambar_profile/{{$profile->gambar}}" class="img-fluid" alt="">
      </div>

    </div>
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{$profile->jumlah_rombel}}</span>
            <p>Rombongan Belajar</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{$profile->jumlah_siswa}}</span>
            <p>Siswa</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{$profile->jumlah_guru}}</span>
            <p>Guru</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{$profile->jumlah_tendik}}</span>
            <p>Tenaga Kependidikan</p>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->
  </div>
  <div class="text-center"> <a href="{{route('profilemadrasah.edit', $profile->id)}}" class="btn btn-lg btn-success">Edit Profile Madrasah</a></div>
</section><!-- End About -->
@endforeach
@endsection