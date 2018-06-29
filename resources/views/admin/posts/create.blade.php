@extends('layouts/app')

    @section('content')

    <h1 style="text-align: center">Create Post</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'style'=>'display:grid; width:500px; margin:auto;']) !!}

        {!! Form::label("title", "Title") !!}
        {!! Form::text("title", null) !!}

        {!! Form::label("content", "Content") !!}
        {!! Form::textarea("content", null) !!}

        {!! Form::label("images", "Images") !!}
        {!! Form::file('photo') !!}

        {!! Form::select('Category') !!}

        {!! Form::submit("Create Post") !!}

    {!! Form::close() !!}

    @include('includes.errors')

@stop