@extends('Layouts.app')

@section('content')

<div class="form-group"></div>
    <div class="row">
        <div class="col-xs-3 col-sm-2"></div>
            <div class="col-xs-9 col-sm-8">

                <div class="card">
                    <div class="card-body">

                        {!! Form::open(['url' => 'posts/create']) !!}

                            echo Form::text('title','',['class' => 'fom-control','placeholder' => 'post title']);
                            echo Form::text('body','',['class' => 'fom-control','placeholder' => 'post body']);


                        {!! Form::close() !!}

                    </div>
                </div>

            <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-3 col-sm-2"></div>

    </div>

@endsection
