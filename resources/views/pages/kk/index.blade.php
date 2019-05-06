@extends('layouts.temp')

@section('title','Kepala Keluarga')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('kk.create') }}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
            <br><br>
            @include('alert.main')
            <div class="card">
                <div class="card-header">item</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>NIK</td>
                                <td>Nama</td>
                                <td>Agama</td>
                                <td>Pekerjaan</td>
                                <td>Alamat</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $field->nik }}</td>
                                <td>{{ $field->nama }}</td>
                                <td>{{ $field->agama }}</td>
                                <td>{{ $field->pekerjaan }}</td>
                                <td>{{ $field->alamat }}</td>
                                
 
                                <td>
                                    <a href="{{ route('kk.destroy',$field) }}" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i></a>
                                    <a href="{{ route('kk.edit',$field) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection