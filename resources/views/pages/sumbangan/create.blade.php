@extends('layouts.temp')

@section('title','Tambah Donasi Desa')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('alert.main')
            <div class="card">
                <div class="card-header">Donasi Desa</div>
                <div class="card-body">
                    <form action="{{ route('sumbangan.store') }}" method="POST">
                        @csrf

		                 
		                    <div class="form-group">
		                        <label for="">Donatur</label>
		                        <input type="text" name="nama_donatur" id="" class="form-control" required value="{{ old('nama_donatur') }}">
		                    </div>


	                        <div class="form-group">
	                            <label for="">Total Donasi</label>
	                            <input type="number" name="total" id="" class="form-control" required value="{{ old('total') }}">
                        	</div>


                        	 <div class="form-group">
	                            <label for="">Tujuan Donasi</label>
	                            <textarea name="tujuan" id="" cols="10" rows="10" class="form-control">
	                            </textarea>
                        	</div>

	                        <input type="submit" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




