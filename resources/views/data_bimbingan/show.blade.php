@extends('data_bimbingan.layout')

@section('content')

<div class="card">
    <div class="card-header">Data mahasiswa</div>
  <div class="card-body">

    <div class="card-body">
        <h5 class="card-title">Name : {{ $data_bimbingan->nama }}</h5>
        <p class="card-text">NIM : {{ $data_bimbingan->NIM }}</p>
        <p class="card-text">Dosen pembimbing 1 : {{ $data_bimbingan->dosen_pembimbing_1 }}</p>
        <p class="card-text">Dosen pembimbing 2 : {{ $data_bimbingan->dosen_pembimbing_2 }}</p>
        <p class="card-text">Dosen penguji : {{ $data_bimbingan->dosen_penguji }}</p>
        {{-- <p class="card-text">Address : {{ $data_bimbingan->NIM }}</p> --}}
        {{-- <p class="card-text">Mobile : {{ $students->mobile }}</p> --}}
    {{-- <div class="card-body">
        <h5 class="card-title">Nama : {{ $nama->nama }}</h5>
        <p class="card-text">NIM : {{ $NIM->NIM }}</p>
        <p class="card-text">dosen pembimbing : {{ $dosen_1->dosen_1 }}</p> --}}
        {{-- $nama = $request->input('nama');
        $NIM = $request->input('NIM');
        $dosen_1 = $request->input('dosen_1');
        $dosen_2 = $request->input('dosen_2');
        $dosen_penguji = $request->input('dosen_penguji'); --}}
  </div>

    </hr>

  </div>
</div>
</div>
