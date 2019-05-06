@extends('layouts.temp')

@section('title','Keperluan Desa')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('keperluan.create') }}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
            <br><br>
            @include('alert.main')
            <div class="card">
                <div class="card-header">item</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Pengguna</td>
                                <td>Keperluan</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $field->nama }} </td>
                                <td>{{ $field->tujuan }}</td>
                                <td>{{ $field->total }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection