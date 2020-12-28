@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Contact</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li>Contact</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="contact" class="contact pt-2 pb-2">
  @if ($contact->count() >= 1)
  @foreach ($contact as $data_contact)
  <div class="container">
    <div class="info">
      <div class="row">
        <div class="address col-md-6">
          <i class="icofont-google-map"></i>
          <h4>Alamat:</h4>
          <p>{{$data_contact->alamat}}</p>
        </div>
        <div class="email col-md-6">
          <i class="icofont-envelope"></i>
          <h4>Email:</h4>
          <p>{{$data_contact->email}}</p>
        </div>
      </div>
      <div class="row">
        <div class="phone col-md-6">
          <i class="icofont-phone"></i>
          <h4>Telpon/HP:</h4>
          <p>{{$data_contact->telpon}}</p>
        </div>
        <div class="phone col-md-6">
          <i class="icofont-instagram"></i>
          <h4>Instagram:</h4>
          <p>{{$data_contact->instagram}}</p>
        </div>
      </div>
      <div class="row">
        <div class="phone col-md-6">
          <i class="icofont-facebook"></i>
          <h4>Facebook:</h4>
          <p>{{$data_contact->facebook}}</p>
        </div>
        <div class="phone col-md-6">
          <i class="icofont-twitter"></i>
          <h4>Twitter:</h4>
          <p>{{$data_contact->twitter}}</p>
        </div>
      </div>
      <div class="text-center"> <a href="{{route('contact.edit', $data_contact->id)}}" class="btn btn-md btn-success">Edit Data Contact</a></div>

    </div>
  </div>
  @endforeach
  @else
  <div class="text-center"> <a href="{{route('contact.create')}}" class="btn btn-md btn-success">Buat Data Contact</a></div>
  @endif
</section><!-- End About -->

@endsection