@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4">
                {!! $menu->render() !!}
            </div>

            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">{{ __('Create a Post') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('admin.posts.store')}}">
                            @csrf
                            <input name="author_id" type="hidden" value="{{Auth::user()->id}}">

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input name="title" type="text"
                                           placeholder="{{ __('Title post') }}" value="{{ old('title') }}"
                                           class="form-control @error('title') is-invalid @enderror" >

                                    @error('title')
                                    <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea name="content" id="content"
                                              placeholder="{{__('Post content')}}" value="{{ old('content') }}"
                                              class="tiny form-control @error('content') is-invalid @enderror"></textarea>
                                    @error('content')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="categories">{{__('Categories')}} </label>
                                        <select id="categories" name="categories" multiple="multiple"
                                                class="form-control @error('content') is-invalid @enderror">
                                            @foreach($categories as $category)
                                                <option value="{{$category['id']}}">{{$category['name']}}</option>
                                            @endforeach
                                        </select>

                                    @error('categories')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-end">
                                <input class="btn btn-primary" value="{{__('Save')}}" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('scripts')
    <script>
        // Initialize the app
        $(document).ready(function() {
            $('#categories').select2({
                default: '',
                placeholder: "{{__('Select the categories')}}",
                width: 'resolve',
                allowClear: true
            });

        });
    </script>
@endpush
