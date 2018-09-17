
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
            <p><a href="posts/{{posts->id}}">{{ $post->title }}</a></p>

       </div>
    </div>
@endforeach

@else

<div class="card">
    <div class="card-body">
         <p>There are currently no posts to view.</p>
    </div>
 </div>


@endif
            <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-3 col-sm-2"></div>

    </div>

@endsection
