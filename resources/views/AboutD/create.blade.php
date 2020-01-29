@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/s" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New About</h1>
                </div>
                <div class="form-group row">
                    <label for="title1" class="col-md-4 col-form-label">Title 1</label>

                    <input id="title1"
                           type="text"
                           class="form-control{{ $errors->has('title1') ? ' is-invalid' : '' }}"
                           name="title1"
                           value="{{ old('title1') }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('title1'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title1') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="title2" class="col-md-4 col-form-label">Title2</label>

                    <input id="title2"
                           type="text"
                           class="form-control{{ $errors->has('title2') ? ' is-invalid' : '' }}"
                           name="title2"
                           value="{{ old('title2') }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('title2'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title2') }}</strong>
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

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New About us</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
