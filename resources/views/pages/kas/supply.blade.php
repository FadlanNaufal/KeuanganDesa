@extends('layouts.temp')

@section('title','Tambah Kas')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('alert.main')
            <div class="card">
                <div class="card-header">Input Kas</div>
                <div class="card-body">
                  <form action="{{ route('supply.store') }}" method="POST">
                        @csrf
							
						<input type="hidden" name="rt_id" value="{{$data->id}}">
                         <div class="form-group">
                            <label for="">Total</label>
                            <input type="text" class="form-control" 
                             value="{{ $data->asalKas->nama_rt}} // {{ $data->asalKas->nama_rw}}" disabled="">
                        </div>


                         <div class="form-group">
                            <label for="">Total</label>
                            <input type="number" name="total" id="" class="form-control" required min="1" max="99999999999">
                        </div>



                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
