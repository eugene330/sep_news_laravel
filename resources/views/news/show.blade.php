@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="content">
            <a href="{{route('news.list')}}" label="news" class="btn btn-info">Вернуться к списку новостей</a>

            <h2>
                {{$news->title}}
            </h2>
            <div>
                {{$news->text}}
            </div>
        </div>
    </div>
@endsection
