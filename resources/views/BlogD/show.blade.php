@extends('layouts.app')

@section('content')
<div style="text-align: center">
    <!-- Single Service -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" style="display: inline-block">
            <div class="tm-service text-center">
                <h5>{{$blog->userName}}</h5>
                <img src="{{asset("storage/".$blog->image)}}">
                <span class="tm-service-icon">
                     <i class="{{$blog->title}}"></i>
                </span>
                <p>{{$blog->paragraph}}</p>
            </div>
    </div>
    <!--// Single Service -->
</div>


@endsection
