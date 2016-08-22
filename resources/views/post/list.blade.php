@extends('templates.default')
@section('title') Home @stop
@section('container')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 col-xs-12 post">
                    <h3>{{ $post["title"] }}</h3>
                    <div class="col-sm-12">
                        <p>{{ $post["text"] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop