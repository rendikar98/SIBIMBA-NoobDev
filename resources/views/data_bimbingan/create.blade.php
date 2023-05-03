@extends('data_bimbingan.layout')

@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

      <form action="{{ url('data_bimbingan') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>NIM</label></br>
        <input type="text" name="NIM" id="NIM" class="form-control"></br>
        <label>Dosen pembimbing 1</label></br>
        <input type="text" name="dosen_pembimbing_1" id="dosen_pembimbing_1" class="form-control"></br>
        <label>Dosen pembimbing 2</label></br>
        <input type="text" name="dosen_pembimbing_2" id="dosen_pembimbing_2" class="form-control"></br>
        <label>Dosen penguji 1</label></br>
        <input type="text" name="dosen_penguji" id="dosen_penguji" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
