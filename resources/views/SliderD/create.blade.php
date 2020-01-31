@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/sl" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Slider</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Slider Title</label>

                    <input id="title"
                           type="text"
                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                           name="title"
                           value="{{ old('title') }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="paragraph" class="col-md-4 col-form-label">Slider paragraph</label>

                    <input id="paragraph"
                           type="text"
                           class="form-control{{ $errors->has('paragraph') ? ' is-invalid' : '' }}"
                           name="paragraph"
                           value="{{ old('paragraph') }}"
                           autocomplete="paragraph" autofocus>

                    @if ($errors->has('paragraph'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('paragraph') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Slider Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Slider</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
