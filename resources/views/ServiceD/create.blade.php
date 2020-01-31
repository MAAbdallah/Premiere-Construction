@extends('layouts.app')

@section('content')
<div class="container" xmlns="http://www.w3.org/1999/html">
    <form action="/sr" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Service</h1>
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
                    <label for="iconType" class="col-md-4 col-form-label">Icon Type</label>

                    <select id="type" name="type">
                        <option id="Service" name="Service" value="Service">Service</option>
                        <option id ="Feature"name="Feature" value="Feature">Feature</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="icon" class="col-md-4 col-form-label">Icon</label>
                    <select id="icon" name="icon">
                        @php
                            $iconsS = ['flaticon-planning','flaticon-diagram','flaticon-chart'];
                            $iconsF = ['flaticon-idea','flaticon-options','flaticon-leadership','flaticon-responsive','flaticon-password','flaticon-24-hours'];

                        @endphp

                        @foreach($iconsS as $IS)
                            <option name={{$IS}} value={{$IS}}>{{$IS}}</option>
                        @endforeach
                        @foreach($iconsF as $IS)
                            <option name={{$IS}} value={{$IS}}>{{$IS}}</option>
                        @endforeach

                    </select>
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
                    <button class="btn btn-primary">Add New Service</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
