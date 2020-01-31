@extends('layouts.app')

@section('content')
<div style="text-align: center">
    <!-- Single Service -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp" style="display: inline-block">
        <div class="tm-service text-center">
                        <span class="tm-service-icon">
                            <i class="{{$service->icon}}"></i>
                        </span>
            <h5>{{$service->title}}</h5>
            <p>{{$service->paragraph}}</p>
        </div>
    </div>
    <!--// Single Service -->
</div>


@endsection
