@extends('layouts.appnonlogin')

@section('content')
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="portfolio-details-container">

      <div class="row">
        <div class="col col-md-8 owl-carousel portfolio-details-carousel">
          @foreach($berita_terbaru as $data_berita)
          <img src="{{URL::to('/')}}/foto_berita/{{$data_berita->foto}}" class="img-fluid" alt="">
          @endforeach
        </div>
        <div class="col col-md-4" style="padding-top: 38px;">
          <h4>Berita Terbaru</h4>
          <hr>
          @foreach($berita_terbaru as $berita)
          <div class="product-img">
            <img src="{{URL::to('/')}}/foto_berita/{{$berita->foto}}" alt="img-thumbnail" style="width: 80px;">
            <a href="/home/berita/{{$berita->id}}" target="_blank" class="product-title">{!!substr($berita->judul, 0, 18)!!}.....
              <span class="badge badge-success">{{$berita->created_at->diffForHumans()}}</span></a>

          </div>
          <div class="product-info">
            <span class="product-description">
              {!!substr($berita->deskripsi, 0, 80)!!}.....
            </span>
          </div>
          <hr>
          @endforeach
        </div>
      </div>

    </div>

    <div class="portfolio-description">
      <h2>Berita Terdahulu</h2>
      <div class="row">
        @foreach($berita_all as $data_berita)
        <div class="col-md-4">
          <div class="panel panel-default">

            <div class="panel-heading post-thumb">
              <img class="card-img-top" src="{{URL::to('/')}}/foto_berita/{{$data_berita->foto}}" />
            </div>

            <div class="panel-body post-body-berita">
              <a href="/home/berita/{{$data_berita->id}}" target="_blank">
                <h5>{{$data_berita->judul}}</h5>
              </a>
              <h6 class="post-title">
                <span>{{$data_berita->penulis}} - {{$data_berita->created_at->diffForHumans()}}</span>
              </h6>
              <span>{!!substr($data_berita->deskripsi, 0, 300)!!}..... </span> <br>
              <a href="/home/berita/{{$data_berita->id}}" target="_blank">Baca selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  </div>
</section><!-- End Portfolio Details Section -->
@endsection