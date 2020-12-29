@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Tulis Berita Baru</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li><a href="{{ route('berita.index') }}">Berita</a></li>
        <li>Tulis Berita</li>
      </ol>
    </div>
    <section id="contact" class="contact pt-3 pb-3">
      <form action="{{ route('berita.store') }}" method="post" role="form" class="php-form bg-white" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('post')
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul" value="{{ old('judul') }}" required>
          <div class="validate"></div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="foto">Foto</label>
            <div style="position:relative;">
              <a class='btn btn-primary' href='javascript:;'>
                Pilih File
                <input required id="foto" name="foto" class="form-control" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40" onchange='$("#upload-file-info").html($(this).val());'>
              </a>
              &nbsp;
              <span class='label label-info' id="upload-file-info">Belum ada file yang dipilih</span>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" name="penulis" id="penulis" value="{{ old('penulis') }}" required>
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control summernote" id="deskripsi" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
          <div class="validate"></div>
        </div>

        <div class="text-center"><button class="bg-success btn-sm" type="submit">Simpan Data</button></div>
      </form>
    </section><!-- End Contact Section -->
  </div>
</section><!-- End Breadcrumbs -->


@endsection