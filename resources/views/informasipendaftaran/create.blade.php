@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Buat Informasi Pendaftaran</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li><a href="{{ route('informasipendaftaran.index') }}">Informasi Pendaftaran</a></li>
        <li>Buat Informasi</li>
      </ol>
    </div>
    <section id="contact" class="contact pt-3 pb-3">
      <form action="{{ route('informasipendaftaran.store') }}" method="post" role="form" class="php-form bg-white" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('post')
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="gambar">Gambar</label>
            <div style="position:relative;">
              <a class='btn btn-primary' href='javascript:;'>
                Pilih File
                <input required id="gambar" name="gambar" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40" onchange='$("#upload-gambar-info").html($(this).val());'>
              </a>
              &nbsp;
              <span class='label label-info' id="upload-gambar-info">{{ old('gambar') }}</span>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="status">Status Pendaftaran</label>
            <select required name="status" id="status" class="form-control">
              <option value="">-- Pilih Status Pendaftaran --</option>
              <option value="1">Buka</option>
              <option value="0">Tutup</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control summernote" id="deskripsi" name="deskripsi" rows="10" data-rule="minlen:20" data-msg="Deskripsi minimal 20 karakter" required>{{ old('deskripsi') }}</textarea>
          <div class="validate"></div>
        </div>
        <div class="text-center"><button class="bg-success btn-sm" type="submit">Simpan Data</button></div>
      </form>
    </section><!-- End Contact Section -->
  </div>
</section><!-- End Breadcrumbs -->


@endsection