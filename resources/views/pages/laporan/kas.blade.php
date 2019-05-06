@extends('layouts.temp')

@section('title','Kas Warga')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br><br>
            @include('alert.main')
            <div class="card">
                <div class="card-header">item</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama RT / RW</td>
                                <td>Total Kas</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kas as $field)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $field->asalKas->nama_rt }} / {{ $field->asalkas->nama_rw }}</td>
                                <td>Rp.{{ number_format($field->total) }}</td>
                                
                                <td>
                                    <a href="{{ route('kas.destroy',$field) }}" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i></a>
                                    <a href="{{ route('kas.show',$field) }}" class="btn btn-info"><i class="fa fa-money-bill"></i></a>
                                    <a href="{{ route('kas.edit',$field) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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