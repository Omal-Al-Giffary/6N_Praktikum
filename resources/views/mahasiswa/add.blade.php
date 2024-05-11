@extends('layouts.main')
@section('content')

<div class="container mt-4">
    <form action="{{route('mahasiswaSave')}}" method="POST" enctype="multipart/form-data">
    @csrf
    

    <div class="form-group mb-3">
        <label for="">Jurusan</label>
        <select name="jurusan" id="" class="form-control">
        <option value="">- Pilih</option>
            <option value="TI">TI</option>
            <option value="Hukum">Hukum</option>
            <option value="Ekonomi">Ekonomi</option>
        </select>
    </div>


    <div class="form-group mb-3">
        <label for="">NPM</label>
        <input type="text" name="npm" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="">Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control">
    </div>

    <label for=""class="mb-2">Jenis Kelamin</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L">
        <label class="form-check-label" for="flexRadioDefault1">
    Laki-Laki
  </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
        <label class="form-check-label" for="flexRadioDefault2">
    Perempuan
  </label>
    </div>

    <div class="form-group mb-3">
        <label for="">Alamat</label>
       <textarea name="alamat" class="form-control"></textarea>
    </div>

    <div class="form-group mb-3">
        <label for="">Hoby</label>
        <input type="text" name="hoby" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="">Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>

    <div class="float-end mt-2 mb-4">
        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>

    </form>    
</div>
@endsection