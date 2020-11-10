@extends('web.layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <img src="{{asset('files/images/logo_square.jpg')}}">
                <h2 style="font-family:  'Roboto'">{{env('APP_DESCRIPTION')}}</h2>
            </div>
        </div>
    </div>
@endsection
