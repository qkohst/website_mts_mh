@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Buat Data Contact</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li><a href="{{ route('contact.index') }}">Contact</a></li>
        <li>Buat Data</li>
      </ol>
    </div>
    <section id="contact" class="contact pt-3 pb-3">
      <form action="{{ route('contact.store') }}" method="post" role="form" class="php-form bg-white" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('post')
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat') }}" required>
            <div class="validate"></div>
          </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="telpon">Telpon/HP</label>
            <input type="number" class="form-control" name="telpon" id="telpon" value="{{ old('telpon') }}" required>
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" name="instagram" id="instagram" value="{{ old('instagram') }}">
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" name="facebook" id="facebook" value="{{ old('facebook') }}">
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control" name="twitter" id="twitter" value="{{ old('twitter') }}">
            <div class="validate"></div>
          </div>
        </div>

        <div class="text-center"><button class="bg-success btn-sm" type="submit">Simpan Data</button></div>
      </form>
    </section><!-- End Contact Section -->
  </div>
</section><!-- End Breadcrumbs -->


@endsection