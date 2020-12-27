@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Ekstrakulikuler</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li>Ekstrakulikuler</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">
    <div class="text-center"><a href="{{route('ekstrakulikuler.create')}}" class="btn btn-md btn-success">Tambah Data Ekstrakulikuler</a></div>
    <div class="row">
      @foreach($ekstrakulikuler as $data_ekskul)
      <div class="col-lg-4 col-md-6 d-flex mt-0 mt-md-0">
        <div class="bg-white">
          <img src="assets/img/portfolio/portfolio-3.jpg" class="card-img-top w-80" alt="...">
          <div class="container mt-2">
            <h4><a href="">{{$data_ekskul->nama}}</a></h4>
            <p>{{$data_ekskul->deskripsi}}</p>
          </div>
          <div class="text-center"><a href="" class="btn btn-sm btn-primary">Edit Data</a></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End About -->
@endsection