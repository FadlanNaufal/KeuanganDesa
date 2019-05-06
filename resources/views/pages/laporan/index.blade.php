@extends('layouts.temp')

@section('title','Kas Warga')

@section('content')
    <div class="row">
        <div class="col-md-12">
          
            <br><br>
            @include('alert.main')
            <div class="card">
                <div class="card-header">Laporan Keuangan</div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="row">
                                <div class="col-md-6 ">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Total Kas Desa
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="text-center">Rp.{{ number_format($kas) }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{route('laporan.create')}}"><i>Lihat Detail >></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Total Sumbangan Desa
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="text-center">Rp.{{ number_format($sumbangan) }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <a href=""><i>Lihat Detail >></i></a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection