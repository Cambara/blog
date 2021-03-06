@extends('templates.default')
@section('title') Home @stop
@section('container')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 col-xs-12 post">
                    <h3>
                        {{ $post["title"] }} -
                        @foreach($post->tags as $tag)
                            {{ $tag->name }}
                        @endforeach
                    </h3>
                    <div class="col-sm-12">
                        <p>{{ $post["text"] }}</p>
                    </div>
                    <h4>Comentários</h4>
                    <div class="col-sm-12">
                        @foreach($post->comment as $comment)
                            <h6>
                                {{ $comment->name }}
                                {{ $comment->email }}
                            </h6>
                            <p>
                                {{ $comment->comment }}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        {!! $posts->render() !!}
    </div>
@stop