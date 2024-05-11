@extends("layouts.main")
@section("content")
<div class=container mt-4">
<a href="mahasiswa/add" class="btn btn-primary mt-2 mb-2">+ tambah data</a>
<table class="table table-striped">
        <tr style="font-size:20px; font-weight:bold">
            <td>NO</td>
            <td>Jurusan</td>
            <td>NPM</td>
            <td>Nama Mahasiswa</td>
            <td>Tanggal Lahir</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Hoby</td>
            <td>Foto</td>
            <td>Aksi</td>
        </tr>

        @php
            $no=1;
        @endphp
        @foreach ($data as $item)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->jurusan}}</td>
                <td>{{$item->npm}}</td>
                <td>{{$item->nama_mahasiswa}}</td>
                <td>{{$item->tanggal_lahir}}</td>
                <td>{{$item->jenis_kelamin}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->hoby}}</td>
                <td>
                    <img src="{{asset('storage/foto/'.$item->foto)}}" alt="" width="50">
                </td>
                <td>
                    <a href="" class="btn btn-warning"> Edit</a>
                    <a href="" class="btn btn-danger"> Hapus</a>
                </td>
            </tr>
            @endforeach
    </table>
</div>
    @endsection