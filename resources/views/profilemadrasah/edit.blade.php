@extends('layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h4>Edit Profile Madrasah</h4>
      <ol>
        <li><a href="#">Admin</a></li>
        <li>Profile Madrasah</li>
        <li>Edit</li>
      </ol>
    </div>
    <section id="contact" class="contact pt-3 pb-3">
      <form action="{{ route('profilemadrasah.update', $profile_madrasah->id) }}" method="post" role="form" class="php-form bg-white" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('put')
        <div class="form-group">
          <label for="nama">Nama Madrasah</label>
          <input type="text" class="form-control" name="nama" id="nama" data-rule="minlen:5" data-msg="Nama Madrasah minimal 5 karakter" value="{{$profile_madrasah->nama}}" />
          <div class="validate"></div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="jumlah_rombel">Jumlah Rombongan Belajar</label>
            <input type="number" class="form-control" name="jumlah_rombel" id="jumlah_rombel" data-rule="required" data-msg="Isian ini tidak boleh kosong" value="{{$profile_madrasah->jumlah_rombel}}" />
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="jumlah_siswa">Jumlah Siswa</label>
            <input type="number" name="jumlah_siswa" class="form-control" id="jumlah_siswa" data-rule="required" data-msg="Isian ini tidak boleh kosong" value="{{$profile_madrasah->jumlah_siswa}}" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="jumlah_guru">Jumlah Guru</label>
            <input type="number" class="form-control" name="jumlah_guru" id="jumlah_guru" data-rule="required" data-msg="Isian ini tidak boleh kosong" value="{{$profile_madrasah->jumlah_guru}}" />
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="jumlah_tendik">Jumlah Tenaga Kependidikan</label>
            <input type="number" name="jumlah_tendik" class="form-control" id="validationTooltip05" data-rule="required" data-msg="Isian ini tidak boleh kosong" value="{{$profile_madrasah->jumlah_tendik}}" required />
            <div class="invalid-tooltip">
              Please provide a valid zip.
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" data-rule="minlen:20" data-msg="Deskripsi minimal 20 karakter">{{$profile_madrasah->deskripsi}}</textarea>
          <div class="validate"></div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" data-rule="maxlen:45" data-msg="Nama file terlalu panjang">
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="logo">Logo Madrasah</label>
            <input type="file" class="form-control" id="logo" name="logo">
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