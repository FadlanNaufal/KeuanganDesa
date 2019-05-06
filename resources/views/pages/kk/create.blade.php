@extends('layouts.temp')

@section('title','Tambah Kepala Keluarga')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('alert.main')
            <div class="card">
                <div class="card-header">Kepala Keluarga</div>
                <div class="card-body">
                    <form action="{{ route('kk.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" name="nik" id="" class="form-control" required value="{{ old('nik') }}">
                        </div>

                         <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="" class="form-control" required value="{{ old('nama') }}">
                        </div>

                         <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" name="pekerjaan" id="" class="form-control" required value="{{ old('pekerjaan') }}">
                        </div>

                         <div class="form-group">
	                        <label for="">Agama</label>
	                        <select name="agama" id="" class="form-control select2">
	                            <option value="islam">Islam</option>
	                            <option value="kristen">Kristen</option>
	                            <option value="katolik">Katholik</option>
	                            <option value="hindu">Hindu</option>
	                            <option value="budha">Budha</option>
	                        </select>
	                    </div>

	                     <div class="form-group">
                            <label for="">Alamat</label>
                           <textarea name="alamat" id="" cols="30" rows="10" class="form-control">{{old('alamat')}}</textarea>
                        </div>


                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
