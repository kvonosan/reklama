@extends('layouts.app')

@section('content')
    @if (isset($contents))
        @foreach ($contents as $content)
            <h1>{{ $content->name }}</h1>
            @if (($content->image_path) !== "")
                <image class="image-responsive content-image" src="img/{{ $content->image_path }}"></image>
            @endif
            @if (isset($content->video_url))
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $content->video_url }}" frameborder="0" allowfullscreen></iframe>
                </div>
            @endif
            @if (isset($content->data))
                <p class="content-text">{!! $content->data !!}</p>
            @endif
            @if (isset($content->created_at))
                @if (Auth::guest())
                    <button onclick="not_login()">Нравится: {{$content->like_count}}</button>
                    <button onclick="not_login()">Не нравится: {{$content->dislike_count}}</button>
                @endif
                @if (!Auth::guest())
                    @if (isset($content->type))
                        @if ($content->type == 'like')
                            <button id="like{{$content->like}}" onclick="cancel(id, 'like', {{$content->like}}, {{$content->id}})"><img class="img-responsive" src="img/like.jpg")></img>Нравится: {{$content->like_count}}</button>
                            <button id="dislike{{$content->dislike}}" onclick="count(id, 'dislike', {{$content->dislike}}, {{$content->id}})">Не нравится: {{$content->dislike_count}}</button>
                        @endif
                        @if ($content->type == 'dislike')
                            <button id="like{{$content->like}}" onclick="count(id, 'like', {{$content->like}}, {{$content->id}})">Нравится: {{$content->like_count}}</button>
                            <button id="dislike{{$content->dislike}}" onclick="cancel(id, 'dislike', {{$content->dislike}}, {{$content->id}})"><img class="img-responsive" src="img/dislike.jpg")></img>Не нравится: {{$content->dislike_count}}</button>
                        @endif
                    @endif
                    @if (!isset($content->type))
                        <button id="like{{$content->like}}" onclick="count(id, 'like', {{$content->like}}, {{$content->id}})">Нравится: {{$content->like_count}}</button>
                        <button id="dislike{{$content->dislike}}" onclick="count(id, 'dislike', {{$content->dislike}}, {{$content->id}})">Не нравится: {{$content->dislike_count}}</button>
                    @endif
                @endif
                <p>Просмотров:{{$content->view}} Дата создания:{{ $content->created_at }}</p>
            @endif
            <hr>
        @endforeach
        {{ $contents->links() }}
    @endif
@endsection
