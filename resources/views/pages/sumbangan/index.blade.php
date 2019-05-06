@extends('layouts.temp')

@section('title','Donasi Desa')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('sumbangan.create') }}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
            <br><br>
            @include('alert.main')
            <div class="card">
                <div class="card-header">Data Donasi Desa</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Sumbangan</td>
                                <td>Tujuan</td>
                                <td>Status</td>
                                <td>Total Donasi</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                   <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $field->nama_donatur }}</td>
                                <td>{{ $field->tujuan }}</td>
                                <td>
                                    @if($field->status == "diberikan")
                                        <div class="badge badge-primary">Sudah Diberikan</div>
                                    @else
                                        <div class="badge badge-danger">Belum Diberikan</div>
                                    @endif
                                </td>
                                <td>Rp.{{ number_format($field->total, 2) }}</td>
                                
 
                                <td>
                                    <a href="{{ route('sumbangan.destroy',$field) }}" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i></a>
                                    <a href="{{ route('sumbangan.show',$field) }}" class="btn btn-info"><i class="fa fa-chevron-right"></i></a>
                                    <a href="{{ route('sumbangan.edit',$field) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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