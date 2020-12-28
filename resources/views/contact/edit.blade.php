@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Edit Data Contact</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li><a href="{{ route('contact.index') }}">Contact</a></li>
        <li>Edit Data</li>
      </ol>
    </div>
    <section id="contact" class="contact pt-3 pb-3">
      <form action="{{ route('contact.update', $contact->id) }}" method="post" role="form" class="php-form bg-white" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('put')
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" value="{{$contact->alamat}}" required>
          <div class="validate"></div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$contact->email}}" required>
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="telpon">Telpon/HP</label>
            <input type="number" class="form-control" name="telpon" id="telpon" value="{{$contact->telpon}}" required>
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" name="instagram" id="instagram" value="{{$contact->instagram}}">
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" name="facebook" id="facebook" value="{{$contact->facebook}}">
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control" name="twitter" id="twitter" value="{{$contact->twitter}}">
            <div class="validate"></div>
          </div>
        </div>

        <div class="text-center"><button class="bg-success btn-sm" type="submit">Simpan Data</button></div>
      </form>
    </section><!-- End Contact Section -->
  </div>
</section><!-- End Breadcrumbs -->


@endsection