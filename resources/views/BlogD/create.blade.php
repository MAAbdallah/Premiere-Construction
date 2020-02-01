@extends('layouts.app')

@section('content')
<div class="container" xmlns="http://www.w3.org/1999/html">
    <form action="/blog" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Blog</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

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
                    <button class="btn btn-primary">Add New Blog</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
