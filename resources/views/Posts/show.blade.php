@extends('Layouts.app')



@section('content')

<div class="form-group"></div>
    <div class="row">
        <div class="col-xs-3 col-sm-2"></div>
            <div class="col-xs-9 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        @if (count($post) > 0)

                                <p>{{ $post->title }}</p>
                                <p>{{ $post->body }}</p>


                        @endif
                    </div>
                </div>


            <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-3 col-sm-2"></div>

    </div>

@endsection
