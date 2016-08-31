@extends('templates.default')
@section('title') Adicionar Post @endsection
@section('container')
    <div class="container">
        <h1>Adicionar Post</h1>
        {!! Form::open(['route'=>'admin.post.store','method'=>'post']) !!}
            @include('admin.post._postform')
            <div class="form-group">
                {!! Form::label('tags','Tags') !!}
                {!! Form::textarea('tags',null,['class'=>'form-control']) !!}
            </div>
        {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection