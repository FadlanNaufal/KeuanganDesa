@extends('layouts.temp')

@section('title','Tambah Kas')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('alert.main')
            <div class="card">
                <div class="card-header">Kas</div>
                <div class="card-body">
                    <form action="{{ route('kas.store') }}" method="POST">
                        @csrf


                        <div class="form-group">
	                        <label for="">Pemasukan Dari</label>
	                        <select name="rt_rw_id" id="" class="form-control select2">
	                           @foreach($data as $kk)
									<option value="{{$kk->id}}">{{$kk->nama_rt}} // {{$kk->nama_rw}}</option>
								@endforeach
	                        </select>
	                    </div>

                         <div class="form-group">
                            <label for="">Total</label>
                            <input type="number" name="total" id="" class="form-control" required value="{{ old('total') }}" min="1" max="99999999999">
                        </div>



                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
