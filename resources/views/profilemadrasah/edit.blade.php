@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Edit Profile Madrasah</h4>
      <ol>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li><a href="{{ route('profilemadrasah.index') }}">Profile Madrasah</a></li>
        <li>Edit</li>
      </ol>
    </div>
    <section id="contact" class="contact pt-3 pb-3">
      <form action="{{ route('profilemadrasah.update', $profile_madrasah->id) }}" method="post" role="form" class="php-form bg-white" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('put')
        <div class="form-group">
          <label for="nama">Nama Madrasah</label>
          <input type="text" class="form-control" name="nama" id="nama" value="{{$profile_madrasah->nama}}" required>
          <div class="validate"></div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="jumlah_rombel">Jumlah Rombongan Belajar</label>
            <input type="number" class="form-control" name="jumlah_rombel" id="jumlah_rombel" value="{{$profile_madrasah->jumlah_rombel}}" required />
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="jumlah_siswa">Jumlah Siswa</label>
            <input type="number" name="jumlah_siswa" class="form-control" id="jumlah_siswa" value="{{$profile_madrasah->jumlah_siswa}}" required />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="jumlah_guru">Jumlah Guru</label>
            <input type="number" class="form-control" name="jumlah_guru" id="jumlah_guru" value="{{$profile_madrasah->jumlah_guru}}" required />
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="jumlah_tendik">Jumlah Tenaga Kependidikan</label>
            <input type="number" name="jumlah_tendik" class="form-control" id="validationTooltip05" value="{{$profile_madrasah->jumlah_tendik}}" required />
            <div class="invalid-tooltip">
              Please provide a valid zip.
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" data-rule="minlen:20" data-msg="Deskripsi minimal 20 karakter" required>{{$profile_madrasah->deskripsi}}</textarea>
          <div class="validate"></div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="gambar">Gambar</label>
            <div style="position:relative;">
              <a class='btn btn-primary' href='javascript:;'>
                Pilih File
                <input id="gambar" name="gambar" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40" onchange='$("#upload-gambar-info").html($(this).val());'>
              </a>
              &nbsp;
              <span class='label label-info' id="upload-gambar-info">{{$profile_madrasah->gambar}}</span>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="logo">Logo Madrasah</label>
            <div style="position:relative;">
              <a class='btn btn-primary' href='javascript:;'>
                Pilih File
                <input id="logo" name="logo" type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' size="40" onchange='$("#upload-logo-info").html($(this).val());'>
              </a>
              &nbsp;
              <span class='label label-info' id="upload-logo-info">{{$profile_madrasah->logo}}</span>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="loading">Sedang menyimpan data, mohon tunggu beberapa saat ... </div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button class="bg-success btn-lg" type="submit">Simpan Data</button></div>
      </form>
    </section><!-- End Contact Section -->
  </div>
</section><!-- End Breadcrumbs -->


@endsection