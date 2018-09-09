@extends('Layouts.app')



@section('content')

<div class="form-group"></div>
    <div class="row">
        <div class="col-xs-3 col-sm-2"></div>
            <div class="col-xs-9 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        @if (count($posts) > 0)

                                <p>{{ $post->title }}</p>
                                <p>{{ $post->body }}</p>


                        @endif
                    </div>
                </div>

            <!-- Optional: clear the XS cols if their content doesn't match in height -->
            <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-3 col-sm-2"></div>

    </div>

@endsection
