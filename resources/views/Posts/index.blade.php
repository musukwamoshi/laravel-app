
@extends('Layouts.app')



@section('content')

@if (count($posts) > 0)

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach

@endif
@endsection
