@extends('layouts.temp')

@section('title','RT / RW')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('rtrw.create') }}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
            <br><br>
            @include('alert.main')
            <div class="card">
                <div class="card-header">item</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama RT</td>
                                <td>Nama RW</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $field->nama_rt }} </td>
                                <td>{{ $field->nama_rw }}</td>
                                
                                <td>
                                    <a href="{{ route('rtrw.destroy',$field) }}" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i></a>
                                    <a href="{{ route('rtrw.edit',$field) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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