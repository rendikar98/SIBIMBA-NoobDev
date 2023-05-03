@extends('data_bimbingan.layout')

@section('content')
    <div class="container "></div>
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 9 Crud</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/data_bimbingan/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>dosen pembimbing 1</th>
                                    <th>dosen pembimbing 2</th>
                                    <th>dosen penguji</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data_bimbingan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->NIM }}</td>
                                    <td>{{ $item->dosen_pembimbing_1 }}</td>
                                    <td>{{ $item->dosen_pembimbing_2 }}</td>
                                    <td>{{ $item->dosen_penguji }}</td>
                                    <td>
                                        <a href="{{ url('/data_bimbingan/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/data_bimbingan/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="{{ url('/data_bimbingan' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
