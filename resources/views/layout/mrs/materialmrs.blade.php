@extends('layout.master')

    @section('content')


        @if(session('suskses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <H1>Material Terpasang pada {{$data_id['id_mrs']}}</H1>
            </div>
        </div>            
            
@endsection
