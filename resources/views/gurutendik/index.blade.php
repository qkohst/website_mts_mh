@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Guru & Tenaga Kependidikan</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li>Guru & Tenaga Kependidikan</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="gtk" class="team pt-3">
  <div class="text-center"><a href="{{route('gurutendik.create')}}" class="btn btn-md btn-success">Tambah Data GTK</a></div>
  <div class="container">
    <div class="row">
      @foreach($gurutendik as $gtk)
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="{{URL::to('/')}}/foto_gurutendik/{{$gtk->foto}}" alt="">
          <h4>{{$gtk->nama}}</h4>
          <span>{{$gtk->jabatan}}</span>
          <p>
            {{$gtk->motto}}
          </p>
          <div class="social">
            <a><i class="icofont-twitter"></i>{{$gtk->twitter}}</a>
            <a><i class="icofont-facebook"></i>{{$gtk->facebook}}</a>
            <a><i class="icofont-instagram"></i>{{$gtk->instagram}}</a>
          </div>

          <div class="mt-2">
            <a href="{{route('gurutendik.edit', $gtk->id)}}" class="btn btn-sm btn-primary">Edit Data</a>
            <a href="/gurutendik/{{$gtk->id}}/destroy" class="btn btn-danger btn-sm my-1 mr-sm-1" onclick="return confirm('Hapus Data ?')"><i class="nav-icon fas fa-trash"></i>
              Hapus Data</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End About -->
@endsection