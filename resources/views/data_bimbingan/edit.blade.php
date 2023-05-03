@extends('data_bimbingan.layout')

@section('content')
<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">

        <form action="{{ url('data_bimbingan/' .$data_bimbingan->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$data_bimbingan->id}}" id="id" />
          <label>Nama</label></br>
          <input type="text" name="nama" id="nama" value="{{$data_bimbingan->nama}}" class="form-control"></br>
          <label>NIM</label></br>
          <input type="text" name="NIM" id="NIM" value="{{$data_bimbingan->NIM}}" class="form-control"></br>
          <label>Mobile</label></br>
          <input type="text" name="dosen_pembimbing_1" id="dosen_pembimbing_1" value="{{$data_bimbingan->dosen_pembimbing_1}}" class="form-control"></br>
          <label>Mobile</label></br>
          <input type="text" name="dosen_pembimbing_2" id="dosen_pembimbing_2" value="{{$data_bimbingan->dosen_pembimbing_2}}" class="form-control"></br>
          <label>Mobile</label></br>
          <input type="text" name="dosen_penguji" id="dosen_penguji" value="{{$data_bimbingan->dosen_penguji}}" class="form-control"></br>
          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>

    </div>
  </div>
  @stop
