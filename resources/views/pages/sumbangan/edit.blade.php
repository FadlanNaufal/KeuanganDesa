@extends('layouts.temp')

@section('title','Edit Donasi Desa')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('alert.main')
            <div class="card">
                <div class="card-header">Donasi Desa</div>
                <div class="card-body">
                    <form action="{{ route('sumbangan.update',$data) }}" method="POST">
                        @csrf @method('patch')

		                 
		                    <div class="form-group">
		                        <label for="">Donatur</label>
		                        <input type="text" name="nama_donatur" id="" class="form-control" required value="{{ $data->nama_donatur }}">
		                    </div>


	                        <div class="form-group">
	                            <label for="">Total Donasi</label>
	                            <input type="number" name="total" id="" class="form-control" required value="{{ $data->total }}">
                        	</div>


                        	 <div class="form-group">
	                            <label for="">Tujuan Donasi</label>
	                            <textarea name="tujuan" id="" cols="10" rows="10" class="form-control">
	                            	{{ $data->tujuan }}
	                            </textarea>
                        	</div>

	                        <input type="submit" class="btn btn-info" value="Update Data">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




