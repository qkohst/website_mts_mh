@extends('layouts.appnonlogin')

@section('content')
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
@endsection