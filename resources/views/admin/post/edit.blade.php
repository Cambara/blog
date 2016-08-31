@extends('templates.default')
@section('title') Editar Post @endsection
@section('container')
    <div class="container">
        <h1>Editar Post - {{$post->title}}</h1>
        {!! Form::model($post,['route'=>['admin.post.update',$post->id],'method'=>'put']) !!}
            @include('admin.post._postform')
            <div class="form-group">
                {!! Form::label('tags','Tags') !!}
                {!! Form::textarea('tags',$post->tagList,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection