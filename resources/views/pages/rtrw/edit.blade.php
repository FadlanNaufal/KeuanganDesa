@extends('layouts.temp')

@section('title','Edit RT / RW')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('alert.main')
            <div class="card">
                <div class="card-header">RT / RW</div>
                <div class="card-body">
                    <form action="{{ route('rtrw.update',$data) }}" method="POST">
                        @csrf @method('patch')

		                 
		                    <div class="form-group">
		                        <label for="">Nama RT</label>
		                        <input type="text" name="nama_rt" id="" class="form-control" required value="{{ $data->nama_rt}}">
		                    </div>


		                    <div class="form-group">
		                        <label for="">Nama RW</label>
		                        <input type="text" name="nama_rw" id="" class="form-control" required 
		                        value="{{ $data->nama_rw}}">
		                    </div>

	                        <input type="submit" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




