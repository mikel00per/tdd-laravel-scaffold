@extends('web.layouts.app')

@section('content')
    <div class="container h-100">
        <embed src="{{asset('files/pdfs/Antonio_Miguel_Morillo_Chica.pdf')}}#page=2"
                type="application/pdf"
                style="overflow: auto; width: 100%; height: 100%;">


    </div>
@endsection
