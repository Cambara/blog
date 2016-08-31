@extends('templates.default')
@section('title') Home @endsection
@section('container')

<h1>
    Posts
    <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Add Post</a>
</h1>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>
                    <a href="{{route('admin.post.edit',['id'=>$post->id])}}" class="btn btn-default">Editar</a>
                    <a href="{{route('admin.post.destroy',['id'=>$post->id])}}" class="btn btn-danger">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{!! $posts->render() !!}

@endsection