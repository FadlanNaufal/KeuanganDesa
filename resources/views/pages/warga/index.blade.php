@extends('layouts.temp')

@section('title','Warga')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('warga.create') }}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
            <br><br>
            @include('alert.main')
            <div class="card">
                <div class="card-header">Data Warga</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>NIK</td>
                                <td>Kepala Keluarga</td>
                                <td>Nama</td>
                                <td>Status</td>
                                <td>Jenis Kelamin</td>
                                <td>Agama</td>
                                <td>Alamat</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $field->nik }}</td>
                                <td>{{ $field->KK->nama }}</td>
                                <td>{{ $field->nama }}</td>
                                <td>{{ $field->status }}</td>
                                <td>{{ $field->jk }}</td>
                                <td>{{ $field->agama }}</td>
                                <td>{{ $field->alamat }}</td>
                                
 
                                <td>
                                    <a href="{{ route('warga.destroy',$field) }}" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i></a>
                                    <a href="{{ route('warga.edit',$field) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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