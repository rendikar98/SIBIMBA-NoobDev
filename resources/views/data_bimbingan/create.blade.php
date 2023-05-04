@extends('data_bimbingan.layout')

@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

      <form action="{{ url('data_bimbingan') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <div class="px-10 mb-6">
          {{-- <label for="email" class="block mx-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label> --}}
          <input type="text" list="nama" placeholder="Nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
          <datalist id="nama">
              {{-- <select id="mhs" name="mhs"> --}}
                  @foreach ($nama as $value)
                  <option value="{{ $value }}"></option>
                  @endforeach
              {{-- </select> --}}
          </datalist>
      </div></br>
        <label>NIM</label></br>
        <input type="text" list="NIM" placeholder="NIM" name="NIM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
                        <datalist id="NIM">
                            @foreach ($NIM as $value)
                            <option value="{{ $value }}"></option>
                            @endforeach
                        </datalist></br>
        <label>Dosen pembimbing 1</label></br>
  
        <input type="text" list="dosen_pembimbing_1" placeholder="Dosen Pembimbing 1" name="dosen_pembimbing_1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
                            <datalist id="dosen_pembimbing_1">
                                {{-- <select id="pembimbing_1" name="pembimbing_1"> --}}
                                    @foreach ($dosen_1 as $value)
                                    <option value="{{ $value }}"> </option>
                                    @endforeach
                                {{-- </select> --}}
                            </datalist>
      </br>
        <label>Dosen pembimbing 2</label></br>
        <input type="text" list="dosen_pembimbing_2" placeholder="Dosen Pembimbing 2" name="dosen_pembimbing_2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
        <datalist id="dosen_pembimbing_2">
            {{-- <select id="pembimbing_1" name="pembimbing_1"> --}}
                @foreach ($dosen_2 as $value)
                <option value="{{ $value }}"> </option>
                @endforeach
            {{-- </select> --}}
        </datalist></br>
        <label>Dosen penguji </label></br>
        <input type="text" list="dosen_penguji" placeholder="Dosen Penguji " name="dosen_penguji" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        <datalist id="dosen_penguji">
                            {{-- <select id="penguji" name="penguji"> --}}
                                @foreach ($dosen_penguji as $ID3 => $Nama)
                                <option value="{{ $Nama }}"></option>
                                @endforeach
                            {{-- </select> --}}
                        </datalist></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        
    </form>

  </div>
</div>
@stop
