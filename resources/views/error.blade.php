@extends('layouts.app')

@section('content')
<h1 style="color:red"><a href="{{route('login')}}">Войдите</a> или <a href="{{route('register')}}">
        зарегистрируйтесь</a> чтобы добавлять рекламу!</h1>
@endsection
