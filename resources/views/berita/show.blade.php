@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Detail Berita</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li><a href="{{ route('berita.index') }}">Berita</a></li>
        <li>Detail Berita</li>
      </ol>
    </div>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">
          <img src="{{URL::to('/')}}/foto_berita/{{$berita->foto}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h3>Informasi Berita</h3>
            <ul>
              <li><strong>Judul</strong>: {{$berita->judul}}</li>
              <li><strong>Penulis</strong>: {{$berita->penulis}}</li>
              <li><strong>Diposting</strong>: {{$berita->created_at}}</li>
              <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>{{$berita->judul}}</h2>
          <p>
          {!!$berita->deskripsi!!}
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
  </div>
</section><!-- End Breadcrumbs -->


@endsection