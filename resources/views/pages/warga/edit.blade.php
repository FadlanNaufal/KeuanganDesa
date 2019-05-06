@extends('layouts.temp')

@section('title','Edit Kepala Keluarga')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('alert.main')
            <div class="card">
                <div class="card-header">Kepala Keluarga</div>
                <div class="card-body">
                    <form action="{{ route('warga.update',$data) }}" method="POST">
                        @csrf @method('patch')

                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" name="nik" id="" class="form-control" required value="{{ $data->nik }}">
                        </div>


                         <div class="form-group">
	                        <label for="">Agama</label>
	                          <select name="agama" class="form-control kt_selectpicker">
			                        @foreach($kk as $field)
				                        @if($field->id == $data->kk_id)
				                        <option value="{{ $field->id }}" selected>{{ $field->nama }}</option>
				                        @else
				                        <option value="{{ $field->id }}">{{ $field->nama }}</option>
				                        @endif
			                        @endforeach
			                    </select>
	                    </div>


                         <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="" class="form-control" required value="{{ $data->nama }}">
                        </div>

                         <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" name="pekerjaan" id="" class="form-control" required value="{{ $data->pekerjaan }}">
                        </div>

                         <div class="form-group">
	                        <label for="">Agama</label>
	                          <select name="agama" class="form-control kt_selectpicker">
			                        @if($data->agama == "islam")
			                        <option value="islam" selected>Islam</option>
			                        <option value="kristen">kristen</option>
			                        <option value="katolik">katolik</option>
			                        <option value="hindu">hindu</option>
			                        <option value="budha">budha</option>
			                        @elseif($data->agama == "kristen")
			                        <option value="islam">Islam</option>
			                        <option value="kristen" selected>kristen</option>
			                        <option value="katolik">katolik</option>
			                        <option value="hindu">hindu</option>
			                        <option value="budha">budha</option>
			                        @elseif($data->agama == "katolik")
			                        <option value="islam">Islam</option>
			                        <option value="kristen">kristen</option>
			                        <option value="katolik" selected>katolik</option>
			                        <option value="hindu">hindu</option>
			                        <option value="budha">budha</option>
			                        @elseif($data->agama == "hindu")
			                        <option value="islam">Islam</option>
			                        <option value="kristen">kristen</option>
			                        <option value="katolik">katolik</option>
			                        <option value="hindu" selected>hindu</option>
			                        <option value="budha">budha</option>
			                        @else($data->agama == "hindu")
			                        <option value="islam">Islam</option>
			                        <option value="kristen">kristen</option>
			                        <option value="katolik">katolik</option>
			                        <option value="hindu">hindu</option>
			                        <option value="budha" selected>budha</option>
			                        @endif
			                    </select>
	                    </div>

	                     <div class="form-group">
                            <label for="">Status</label>
                           <textarea name="status" id="" cols="30" rows="10" class="form-control">{{ $data->status }}</textarea>
                        </div>


	                     <div class="form-group">
                            <label for="">Alamat</label>
                           <textarea name="alamat" id="" cols="30" rows="10" class="form-control">{{ $data->alamat }}</textarea>
                        </div>


                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
