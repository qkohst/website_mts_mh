@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Berita</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li>Berita</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about pt-3">
  <div class="text-center pb-4"><a href="{{route('berita.create')}}" class="btn btn-md btn-success">Tulis Berita Baru</a></div>
  <div class="container">
    <div class="row">
      @foreach($berita as $data_berita)
      <div class="col-md-4">
        <div class="panel panel-default">

          <div class="panel-heading post-thumb">
            <img class="card-img-top" src="{{URL::to('/')}}/foto_berita/{{$data_berita->foto}}" />
          </div>

          <div class="panel-body post-body-berita">
            <h5>{{$data_berita->judul}}</h5>
            <h6 class="post-title">
              <span>{{$data_berita->penulis}} - {{$data_berita->created_at->diffForHumans()}}</span>
            </h6>
            <span>{!!substr($data_berita->deskripsi, 0, 220)!!}..... </span> <br>
            <a href="{{route('berita.show', $data_berita->id)}}" target="_blank">Baca selengkapnya</a>
            <div class="post-author">
              <a href="{{route('berita.edit', $data_berita->id)}}" class="btn btn-sm btn-primary">Edit Data</a>
              <a href="/berita/{{$data_berita->id}}/destroy" class="btn btn-danger btn-sm my-1 mr-sm-1" onclick="return confirm('Hapus Data ?')"><i class="nav-icon fas fa-trash"></i>
                Hapus Data</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
    </div>
  </div>
  </div>
</section><!-- End About -->
@endsection