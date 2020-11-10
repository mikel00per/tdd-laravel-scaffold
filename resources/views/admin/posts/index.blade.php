@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4">
                {{--            <h1 class="">Shop Name</h1>--}}
                {!! $menu->render() !!}
            </div>

            <div class="col-lg-9">
                @if(count($posts) === 0)
                    <div class="alert alert-info alert-dismissible fade show">
                        <strong>Info!</strong> @lang('No items').
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @endif

                <div class="d-flex flex-row justify-content-end">
                    <a href="{{route('admin.posts.create')}}" class="btn btn-primary">{{__('Add Post')}}</a>
                </div>

                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4">
                            @include('admin.posts.card')
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
@endsection
