@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Добавление рекламы</div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ route('reklama.add') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
                <p><b>Введите заголовок рекламы(обязательно):</b></p>
                <input class="form-control" type="text" name="name" />
            </div>
            
            <div class="form-group">
                <p><b>Выберите картинку(изображение будет сжато до 600х400)(необязательно):</b></p>
                <input class="form-control" type="file" name="image" class="upload" />
            </div>
            
            <div class="form-group">
                <p><b>Скопируйте id видео youtube(Например:5cqsWcVWj6A)(необязательно):</b></p>
                <input class="form-control" type="text" size="20" name="video" />
            </div>
            
            <div class="form-group">
                <p><b>Введите текст рекламы(необязательно):</b></p>
                <textarea class="form-control" type="text" rows="10" cols="80" name="data"></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Загрузить
                </button>
            </div>
            
            @if (isset($mess))
                <h1 style="color:red">{{$mess}}</h1>
            @endif
            @if (isset($uploaded))
                <h1 style="color:green">{{$uploaded}}</h1>
            @endif
        </form>
    </div>
</div>
@endsection
