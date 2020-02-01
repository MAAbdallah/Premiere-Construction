@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/test" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Testimoial</h1>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Name</label>

                    <input id="name"
                           type="name"
                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name"
                           value="{{ old('name') }}"
                           autocomplete="name" autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="position" class="col-md-4 col-form-label">Position</label>

                    <input id="position"
                           type="position"
                           class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}"
                           name="position"
                           value="{{ old('position') }}"
                           autocomplete="position" autofocus>

                    @if ($errors->has('position'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('position') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="paragraph" class="col-md-4 col-form-label">paragraph</label>

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
                    <label for="image" class="col-md-4 col-form-label">test Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New testimoial</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
