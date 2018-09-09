
@extends('Layouts.app')



@section('content')

<div class="form-group"></div>
    <div class="row">
        <div class="col-xs-3 col-sm-2"></div>
            <div class="col-xs-9 col-sm-8">

@if (count($posts) > 0)

@foreach ($posts as $post)
   <div class="card">
       <div class="card-body">
            <p>{{ $post->title }}</p>
       </div>
    </div>
@endforeach

@endif

<!-- Optional: clear the XS cols if their content doesn't match in height -->
            <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-3 col-sm-2"></div>

    </div>

@endsection
