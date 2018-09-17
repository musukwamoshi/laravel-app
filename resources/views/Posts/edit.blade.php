@extends('Layouts.app')



@section('content')
<h3>Edit Posts</h3>

<div class="form-group"></div>
    <div class="row">
        <div class="col-xs-3 col-sm-2"></div>
            <div class="col-xs-9 col-sm-8">

                <div class="card">
                    <div class="card-body">

                        {!! Form::open(['url' => 'PostsController@create',$post->id]) !!}

                            {{Form::label('title','Title')}}
                            {{Form::text('title',$post->id,['class' => 'form-control','placeholder' => 'post title'])}}

                            {{Form::label('body','Body')}}
                            {{Form::textarea('body',$post->body,['class' => 'fom-control','placeholder' => 'post body'])}}

                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}


                        {!! Form::close() !!}

                    </div>
                </div>

            <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-3 col-sm-2"></div>

    </div>



@endsection
